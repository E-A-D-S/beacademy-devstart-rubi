# Projeto empresarial: Ecommerce de vinhos


## Passo a passo para subir o servidor
1. Fazer o clone do projeto:
```bash
git clone git@github.com:E-A-D-S/beacademy-devstart-rubi.git
```

2. Entrar na pasta do projeto:
```bash
cd /beacademy-devstart-rubi
```

3. Instalar as dependências do Composer:
```bash
composer install
```

4. Mudar o arquivo `.env`:
```bash
# Windows
cp .env.example .env

# Linux / Mac
cp .env.example .env
```

5.Editar o arquivo `.env` com dados do seu banco de dados local:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

6. Gerar a chave do Laravel:
```bash
php artisan key:generate
```

7. Fazer a migração do banco de dados:
```bash
php artisan migrate
```

8. Fazer o "semeamento" do banco de dados:
```bash
php artisan db:seed
```

9. Iniciar o servidor para usar a aplicação:
```bash
php artisan serve
```

