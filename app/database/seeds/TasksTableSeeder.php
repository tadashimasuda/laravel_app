<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tasks')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'content' => 'タスク1',
            'imgpath' => 'sample.jpg',
            'done'=>0,
            'good'=>3,
        ]);
        DB::table('tasks')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'content' => 'タスク2',
            'imgpath' => 'sample.jpg',
            'done'=>0,
            'good'=>2,
        ]);
        DB::table('tasks')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'content' => 'タスク3',
            'imgpath' => 'sample.jpg',
            'done'=>0,
            'good'=>4,
        ]);
    }
}
