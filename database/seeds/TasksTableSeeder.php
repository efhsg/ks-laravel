<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tasks')->delete();
        
        \DB::table('tasks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'desc' => 'Preplanning in de agenda zetten',
                'completed' => 0,
                'created_at' => '2017-08-02 12:09:46',
                'updated_at' => '2017-08-02 12:09:50',
            ),
            1 => 
            array (
                'id' => 2,
                'desc' => 'Standup bijwonen',
                'completed' => 0,
                'created_at' => '2017-08-09 12:15:46',
                'updated_at' => '2017-08-16 12:15:50',
            ),
            2 => 
            array (
                'id' => 3,
                'desc' => 'Dashboard testen',
                'completed' => 0,
                'created_at' => '2017-08-09 12:16:04',
                'updated_at' => '2017-08-16 12:16:08',
            ),
        ));
        
        
    }
}