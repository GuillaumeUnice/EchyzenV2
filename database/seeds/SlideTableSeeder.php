<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\Slide;

class SlideTableSeeder extends Seeder {
    public function run()
    {
        DB::table('slides')->delete();

        Slide::create(array('url' => 'banniere.png',
            'alt'       => 'banniere du site',
            'content'   => 'Echyzen de l\'informatique à l\'infographie tout y passe',
            'title'     => 'Bienvenue !!!'));

        Slide::create(array('url' => 'new_website.jpg',
            'alt'       => 'ouverture officiel site',
            'content'   => 'Le site ouvre officiellement ses portes',
            'title'     => 'Ouverture officiel !!!'));
    }
}
