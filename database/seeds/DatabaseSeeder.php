<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $this->call('ImageTableSeeder');
        $this->command->info('Image table seeded!');

        $this->call('RubriqueTableSeeder');
        $this->command->info('Rubrique table seeded!');

        $this->call('NewsTableSeeder');
        $this->command->info('News table seeded!');

        $this->call('MotCleTableSeeder');
        $this->command->info('MotCle table seeded!');

        $this->call('NewsMotCleTableSeeder');
        $this->command->info('NewsMotCle table seeded!');

        $this->call('SlideTableSeeder');
        $this->command->info('Slide table seeded!');
		
		$this->call('KeywordTableSeeder');
        $this->command->info('Keyword table seeded!');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
