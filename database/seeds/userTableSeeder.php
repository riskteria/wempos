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

        User::create([
            'username'          => 'sandyputra',
            'display_name'      => 'SMK Swasta Telkom Sandy Putra',
            'email'             => 'sandyputra@gmail.com',
            'password'          => bcrypt('sekolah'),
            'role'              => 'sekolah',
            'confirmed'         => true,
            'confirmation_code' => md5(microtime() . env('APP_KEY')),
        ]);

        User::create([
            'username'          => 'mandiri',
            'display_name'      => 'Bank Mandiri',
            'email'             => 'mandiri@gmail.com',
            'password'          => bcrypt('organisasi'),
            'role'              => 'organisasi',
            'confirmed'         => true,
            'confirmation_code' => md5(microtime() . env('APP_KEY')),
        ]);

        User::create([
            'username'          => 'user',
            'display_name'      => 'User',
            'email'             => 'user@gmail.com',
            'password'          => bcrypt('user'),
            'role'              => 'user',
            'confirmed'         => true,
            'confirmation_code' => md5(microtime() . env('APP_KEY')),
        ]);
    }
}
