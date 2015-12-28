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
        	'content'	=> 'JAKARTA - Keberadaan sekolah-sekolah yang ada diharapkan tidak saling berkompetisi satu sama lain. Melainkan sama-sama berkolaborasi untuk bisa menciptakan kualitas pendidikan yang lebih baik lagi.

"Saat ini, bukan lagi zamannya sekolah untuk berkompetensi. Tapi sekolah perlu berkolaborasi," ungkap Ketua Gerakan Sekolah Menyenangkan, Lili Halim di Kedubes Australia, Kamis (26/11/2015).
Lili mengungkapkan, para siswa yang mengeyam pendidikan di Australia merasakan suasana sekolah yang berbeda di Indonesia.

"Datang ke sekolah dengan berat hati dan pulang dengan senang hati," ujarnya.
Gerakan ini berusaha untuk mendampingi sekolah-sekolah di Indonesia agar bisa menciptakan suasana yang menyenangkan. Namun, bukan perkara mudah untuk bisa mengubah hal tersebut.

"Menolong sekolah untuk bertransformasi. Pendidikan itu bukan seperti sulap yang bisa langsung berubah. Dan itu cukup panjang prosesnya," ujarnya.
Dalam gerakan ini juga dikembangkan budaya yang positif. Budaya sehat, baik sehat secara fisik maupun psikis. Menciptakan suasana yang aman dan membuat anak-anak merasa senang.

"Anak-anak kalau bisa merasa senang kalau ketika datang ke sekolah," imbuhnya.
Selain itu, juga ada partisipasi dari orangtua. Sehingga hasilnya pun bisa maksimal. Serta pendidikan karakter menjadi salah satu poin penting yang diperhatikan.

"Pendidikan karakter itu harus dimulai sejak TK dan SD. Pendidikan karakter menjadi hal yang penting," tambahnya.',
        ]);
	}
}