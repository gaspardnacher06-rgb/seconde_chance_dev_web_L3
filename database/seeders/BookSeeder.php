<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::firstOrCreate(
            ['title' => 'Le Petit Prince'],
            ['summary' => 'Un aviateur rencontre dans le désert un jeune voyageur venu d’une autre planète.', 'publication_date' => '1943-04-06'],
        );

        Book::firstOrCreate(
            ['title' => 'Vingt mille lieues sous les mers'],
            ['summary' => 'Le professeur Aronnax explore les océans à bord du Nautilus, sous le commandement du capitaine Nemo.', 'publication_date' => '1870-01-01'],
        );

        Book::firstOrCreate(
            ['title' => 'Une si longue lettre'],
            ['summary' => 'Ramatoulaye écrit à son amie pour évoquer son deuil, sa vie et les attentes de la société sénégalaise.', 'publication_date' => '1979-01-01'],
        );

        Book::firstOrCreate(
            ['title' => 'Le Seigneur des anneaux'],
            ['summary' => 'Un hobbit quitte la Comté pour empêcher un anneau de tomber entre les mains de Sauron.', 'publication_date' => '1954-07-29'],
        );
    }
}
