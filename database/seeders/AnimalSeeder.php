<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create([
            'id_type' => 1,
            'imie' => 'Puszek',
            'wiek' => '2 lata',
            'obrazek' => 'c1.jpg',
        ]);

        Animal::create([
            'id_type' => 2,
            'imie' => 'Żabol',
            'wiek' => '2 miesiące',
            'obrazek' => 'g2.jpg',
        ]);

        Animal::create([
            'id_type' => 3,
            'imie' => 'Leon',
            'wiek' => '5 lat',
            'obrazek' => 'f3.jpg',
        ]);

        Animal::create([
            'id_type' => 4,
            'imie' => 'Dori',
            'wiek' => '5 miesięcy',
            'obrazek' => 'e4.jpg',
        ]);

        Animal::create([
            'id_type' => 5,
            'imie' => 'Parot',
            'wiek' => '1 rok',
            'obrazek' => 'i5.jpg',
        ]);
    }
}
