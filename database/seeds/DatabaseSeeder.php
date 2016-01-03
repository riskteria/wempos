<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(userTableSeeder::class);
        $this->command->info('Create Sample User Succesfully');
        $this->call(articleTableSeeder::class);
        $this->command->info('Create Sample Article Succesfully');
        $this->call(schoolsTableSeeder::class);
        $this->command->info('Create Sample School Succesfully');


        Model::reguard();
    }
}
