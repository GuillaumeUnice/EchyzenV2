<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\Motcle;

class MotCleTableSeeder extends Seeder {
    public function run()
    {
        DB::table('motcles')->delete();

        Motcle::create(array('nom' => 'PHP'));
        MotCle::create(array('nom' => 'Symfony'));
        MotCle::create(array('nom' => 'Laravel'));
        MotCle::create(array('nom' => 'Frontend'));
        MotCle::create(array('nom' => 'Gestion'));

    }
}