<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Articles as Articles;

class articleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'Sekolah Jangan Berkompetisi, tapi Berkolaborasi',
        	'intro'		=> 'Keberadaan sekolah-sekolah yang ada diharapkan tidak saling berkompetisi satu sama lain. Melainkan sama-sama berkolaborasi untuk bisa menciptakan kualitas pendidikan yang lebih baik lagi.',
        	'content'	=> 'dshhgfrhihfr',
        ]);
	}
}