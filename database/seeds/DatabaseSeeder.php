<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        $this->call('ProjectsTableSeeder');
		$this->call('TasksTableSeeder');
		$this->call('UserTableSeeder');
	}

}
