<?php
 
use Illuminate\Database\Seeder;

 
class ProjectsTableSeeder extends Seeder {
 
    public function run()
    {
        DB::unprepared(file_get_contents('sql/projects.sql'));
    }
 
}