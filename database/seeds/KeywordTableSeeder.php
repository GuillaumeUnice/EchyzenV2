<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\Keyword;

class KeywordTableSeeder extends Seeder {
    public function run()
    {
        DB::table('keywords')->delete();

        Keyword::create(array('name' => 'PHP'));
		Keyword::create(array('name' => 'JavaScript'));
        
    }
}
