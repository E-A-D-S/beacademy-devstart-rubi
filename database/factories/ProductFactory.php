<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $castas = ['Cabernet Sauvignon','Merlot','Malbec','Tannat','Pinot Noir','Syrah','Carménère','Tempranillo','Chardonnay','Sauvignon Blanc','Rosé','Prosecco'];
        $linhas = ['Reserva','Gran Reserva','Safra 2018','Safra 2020','Selección','Premium','Clássico','Terroir'];
        $corpo  = ['encorpado','leve e frutado','seco','aveludado','intenso'];
        $harmoniza = ['carnes vermelhas','massas','queijos','peixes','uma boa conversa'];

        return [
            'name' => $this->faker->randomElement($castas).' '.$this->faker->randomElement($linhas),
            'description' => 'Vinho '.$this->faker->randomElement($corpo).', ideal para '.$this->faker->randomElement($harmoniza).'. Produto de demonstração (dados fictícios).',
            'category_id' => Category::All()->random()->id,
            'quantity' => $this->faker->numberBetween(1, 99),
            'cost_price' => $this->faker->randomFloat(2, 20, 150),
            'sale_price' => $this->faker->randomFloat(2, 45, 400),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
