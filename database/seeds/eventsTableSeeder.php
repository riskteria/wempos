<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Events as Events;

class eventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

        Events::create([
        	'user_id'		=> 3,
        	'location'		=> 'Jakarta, Indonesia',
        	'title'			=> 'Seminar Fotografi Travelling “Nusantara Dibalik Lensa Kamera”',
        	'due_date'		=>	date('Y-m-d h:i:sa', mktime(11, 14, 54, 8, 12, 2016)),
        	'description'	=> 'Untuk menutup bulan September 2015, Jakarta 32 Celcius bekerja sama dengan Psychology Summit Universitas Indonesia 2015 untuk menyelenggarakan Roadshow Art on the Spot episode 11 di lingkungan kampus Depok. Acara tersebut merupakan rangkaian dari pembukaan Jakarta Biennale 2015 yang diselenggarakan mulai Agustus—Oktober 2015.

Roadshow Art on the Spot mengajak seniman-seniman Indonesia untuk mengadakan kegiatan bersama warga atau komunitas setempat. Dengan mengusung tema “Hidup Itu Seni”, penyelenggaraan roadshow tersebut dapat berupa lokakarya, kelas, atau respons seniman terhadap lingkungan lewat karya seni. Dalam Roadshow Art on the Spot episode 11 tersebut, Jakarta 32 Celcius mengajak seniman The Popo untuk membuka kelas menggambar di Perpustakaan Universitas Indonesia pada tanggal 30 September 2015.

Kelas yang diberikan The Popo dalam Roadshow Art on the Spot episode 11 berupa kelas gambar kreatif. Materi yang diberikan dalam kelas tersebut diambil dari buku berjudul Bahagia yang ditulis oleh The Popo dan dirilis pada tahun 2014. Ia mengajak peserta untuk menggambarkan kebaikan yang dapat ditemukan sehari-hari dengan lebih kreatif.

Tema “Hidup Itu Seni” sengaja dijadikan tema besar Jakarta Biennale 2015 karena hidup dan seni dianggap sebagai dua hal yang tidak dapat dipisahkan. Selain The Popo, seniman yang ikut turun dalam Roadshow Art on the Spot episode lainnya adalah Ika Vantiani, Jeany; fotografer Anton Ismael; ilustrator Lala Bohang dan Jayu Julie; seniman video Gelar Agryano; komikus Reza Mustar alias Komikazer; seniman kertas dan pesulap Kiswinar; kelompok grafiti Gardu House; dan kelompok performans PADJAK.',
        ]);

        Events::create([
        	'user_id'		=> 1,
        	'location'		=> '',
        	'title'			=> '',
        	'due_date'		=> date('Y-m-d h:i:sa', mktime(11, 14, 54, 8, 12, 2016)),
        	'description'	=> '',
        ]);
    }
}
