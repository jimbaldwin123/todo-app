<?php
 
use Illuminate\Database\Seeder;

 
class TasksTableSeeder extends Seeder {
 
    public function run()
    {
        DB::unprepared(file_get_contents('sql/tasks.sql'));
    }
}