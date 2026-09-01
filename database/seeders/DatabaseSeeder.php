<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // idempotente: se ja ha produtos, nao popula de novo (evita duplicar a cada deploy)
        if (\App\Models\Product::count() > 0) {
            return;
        }
        \App\Models\User::factory(10)->create();
        \App\Models\Address::factory(10)->create();
        \App\Models\Phone::factory(10)->create();
        // categorias fixas de vinho (em vez de nomes aleatorios)
        foreach (['Tinto','Branco','Rosé','Espumante','Sobremesa'] as $nome) {
            $cat = new \App\Models\Category();
            $cat->name = $nome;
            $cat->save();
        }
        \App\Models\Product::factory(50)->create();
        // \App\Models\Order::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
