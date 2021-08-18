<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pet = new Pet();
        $pet->name = 'Dog';
        $pet->image = 'dog.png';
        $pet->description = 'Description of dog';
        $pet->save();

        $pet = new Pet();
        $pet->name = 'Cat';
        $pet->image = 'cat.png';
        $pet->description = 'Description of cat';
        $pet->save();

        $pet = new Pet();
        $pet->name = 'Hamster';
        $pet->image = 'hamster.png';
        $pet->description = 'Description of hamster';
        $pet->save();
    }
}
