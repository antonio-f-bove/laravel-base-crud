<?php

use App\models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            extract($comic);

            $c = new Comic();
            $c->title = $title;
            $c->description = $description;
            $c->thumb = $thumb;
            $c->price = $price;
            $c->series = $series;
            $c->sale_date = $sale_date;
            $c->type = $type;
            $c->save();
        }
    }
}
