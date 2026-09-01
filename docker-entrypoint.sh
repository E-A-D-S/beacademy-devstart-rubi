#!/usr/bin/env bash
set -e
: "${PORT:=80}"
sed -ri "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# gera APP_KEY automaticamente se nao vier do ambiente (demo — nao precisa colar)
if [ -z "${APP_KEY}" ]; then
  export APP_KEY="base64:$(head -c 32 /dev/urandom | base64)"
fi

php artisan migrate --force
php artisan db:seed --force || true

php artisan config:cache
php artisan route:cache || true
php artisan view:cache || true

exec apache2-foreground
