<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        User::create([
            'username'          => 'admin',
            'display_name'      => 'Administrator',
            'email'             => 'riskteria@gmail.com',
            'password'          => bcrypt('admin'),
            'role'              => 'admin',
            'confirmed'         => true,
            'confirmation_code' => md5(microtime() . env('APP_KEY')),
        ]);
    }
}
