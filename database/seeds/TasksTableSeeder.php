<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++){
            if($i%2==0){
                DB::table("tasks")->insert([
                    'title' => 'test title1-'.$i,
                    'content' => 'test content1-'.$i,
                    'status' => 'o'
                ]);
            }
            else{
                DB::table("tasks")->insert([
                    'title' => 'test title1-'.$i,
                    'content' => 'test content1-'.$i,
                    'status' => 'x'
                ]);
            }
        }
    }
}
