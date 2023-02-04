<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'type' => 'Gady',
            'opis' => 'Gady (Reptilia) – gromada kręgowców zmiennocieplnych, owodniowców, których ciała pokryte są zrogowaciałym naskórkiem, nieprzepuszczalnym dla wody i gazów.',
            'link' => 'https://www.youtube.com/embed/KFtTGkEUOnY',
            'zdjecie' => 'g1.jpg',
        ]);

        Type::create([
            'type' => 'Płazy',
            'opis' => 'Płazy (Amphibia) – gromada zmiennocieplnych i zimnowodnych kręgowców o wolnym metabolizmie, przystosowanych do życia w wodzie, jak i na lądzie.',
            'link' => 'https://www.youtube.com/embed/KFtTGkEUOnY',
            'zdjecie' => 'g2.jpg',
        ]);

        Type::create([
            'type' => 'Ssaki',
            'opis' => 'Ssaki (Mammalia) – przedstawiciele królestwa zwierząt, najliczniejsza grupa spośród kręgowców, a jednocześnie najwyżej zorganizowana gromada strunowców.',
            'link' => 'https://www.youtube.com/embed/KFtTGkEUOnY',
            'zdjecie' => 'g3.jpg',
        ]);

        Type::create([
            'type' => 'Ryby',
            'opis' => 'Ryby (Piscis) - zmiennocieplne kręgowce zamieszkujące wyłącznie środowisko wodne. Ryby przystosowane są do ciągłego życia w wodzie.',
            'link' => 'https://www.youtube.com/embed/KFtTGkEUOnY',
            'zdjecie' => 'g4.jpg',
        ]);

        Type::create([
            'type' => 'Ptaki',
            'opis' => 'Ptaki (Aves) – stałocieplne zwierzęta z podtypu kręgowców, zdolne do latania dzięki odpowiednio przekształconym kończynom pokrytym piórami.',
            'link' => 'https://www.youtube.com/embed/KFtTGkEUOnY',
            'zdjecie' => 'g5.jpg',
        ]);
    }
}
