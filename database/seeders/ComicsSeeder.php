<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $key => $comic){

            $newComic = new Comic();
            $newComic->titolo = $comic['title'];
            $newComic->descrizione = $comic['description'];
            $newComic->type = $comic['type'];
            $newComic->data_uscita = $comic['sale_date'];
            $newComic->prezzo = $comic['price'];
            $newComic->image = $comic['thumb'];
            $newComic->serie = $comic['series'];

            $newComic->save();

        }


    }
}
