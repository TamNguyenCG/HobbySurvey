<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = new Food();
        $food->name = 'Chocolate';
        $food->image = 'chocolate.png';
        $food->description = 'Description of chocolate';
        $food->save();

        $food = new Food();
        $food->name = 'Banana';
        $food->image = 'banana.png';
        $food->description = 'Description of banana';
        $food->save();

        $food = new Food();
        $food->name = 'Fried Chicken';
        $food->image = 'fried_chicken.png';
        $food->description = 'Description of fried chicken';
        $food->save();
    }
}
