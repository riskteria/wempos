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
        	'location'		=> 'Jakarta, Indonesia',
        	'title'			=> 'Kompetisi Musik dan Seminar bagi Anak Spesial di LSPR',
        	'due_date'		=> date('Y-m-d h:i:sa', mktime(11, 14, 54, 28, 3, 2016)),
        	'description'	=> 'Jakarta, 28 - 29 Maret 2015.  Manusia dapat berkomunikasi melalui musik, inilah yang dibuktikan oleh anak-anak yang memiliki kesulitan dalam berkomunikasi, autisme, yang mengikuti kompetisi musik yang diadakan oleh London School of Public Relations (LSPR)– Jakarta melalui London School Centre for Autism Awareness (LSCAA) dalam rangka memperingati World Autism Awareness Day yang jatuh pada tanggal 2 April setiap tahunnya. 
          Sebanyak 28 peserta bersaing dalam 4 kategori yang berbeda yaitu Piano, Drum, Gitar, dan Band. Mereka akan mengekspresikan talenta mereka melalui acara yang diberi nama Autism Awareness Festival 7th pada 28 Maret 2015 bertempat di Kampus B, LSPR – Jakarta, Jl. K.H. Mas Mansyur Kav. 35 Jakarta.',
        ]);
      
              Events::create([
        	'user_id'		=> 1,
        	'location'		=> 'Jakarta, Indonesia',
        	'title'			=> 'Liga Merah Maroon 2015 Bersama Membangun Olahraga Indonesia',
        	'due_date'		=> date('Y-m-d h:i:sa', mktime(11, 14, 54, 22, 3, 2016)),
        	'description'	=> 'Kompetisi olahraga dan seni terbesar di Universitas Bakrie, Liga Merah Maroon 2015, akhirnya sampai di pengujung acara. Rangkaian kegiatan yang dimulai sejak 16 Maret 2015 ini mempertandingkan beberapa cabang olahraga dan seni seperti basket, sepak bola, bulu tangkis, dan tari saman.

Guna menutup kemeriahan  Liga Merah Maroon 2015, pada 22 Maret 2015 diselenggarakan upacara penutupan yang mengusung tema “Spreading Indonesian Youth Through League.” Tema yang membingkai acara ini memiliki tujuan untuk menyebarkan semangat olahraga kepada setiap anak muda dan memberikan apresiasi kepada para pejuang olahraga di Indonesia.

Upacara penutupan diisi dengan bincang inspiratif oleh Sin Kim Lai yang merupakan mantan atlet basket nasional yang pernah mengharumkan Indonesia pada ajang Sea Games 1997 dengan membawa pulang medali perunggu. Dalam acara ini, Sim Kin Lai bercerita mengenai kehidupannya selama menjadi atlet nasional dan dedikasinya terhadap Indonesia hingga saat ini. Bincang inspiratif ini bertujuan agar para generasi muda tidak pernah lelah untuk terus berdedikasi bagi bangsa ini.

Dalam acara ini, panitia Liga Merah Maroon Menyumbangkan uang tunai sebesar Rp14.000.000 kepada yayasan  olahraga yang digagas oleh Sin Kim Lai, yaitu Pelangi Basketball Club yang berdomisili di Blitar. Pelangi Basketball Club didirikan oleh Sin Kim lai untuk membantu masyarakat yang kurang mampu untuk dapat berprestasi di bidang olahraga basket. Donasi ini diberikan sebagai bentuk apresiasi dan turut membantu mantan olahragawan yang masih berdedikasi khususnya di bidang sekolah olahraga. Donasi ini diharapkan pula  dapat mewakili rasa terima kasih dan dukungan dari partisipan Liga Merah Maroon 2015 sekaligus mengembangkan olahraga Indonesia.',
        ]);
      
      Events::create([
        	'user_id'		=> 1,
        	'location'		=> 'Blitar, Indonesia',
        	'title'			=> 'Try Out SBMPTN IPA, IPS, IPC "Get Ready to Shine"',
        	'due_date'		=> date('Y-m-d h:i:sa', mktime(11, 14, 54, 23, 12, 2016)),
        	'description'	=> 'Try Out SBMPTN IPA, IPS, IPC "Get Ready to Shine"
                            Tanggal : 31 Januari 2016
                            Tempat : Hall Basket Senayan, Jakarta
                            Informasi lebih lanjut : @trofifebui | www.trofifebui.co.nr',
        ]);
      
            Events::create([
        	'user_id'		=> 1,
        	'location'		=> 'Jakarta, Indonesia',
        	'title'			=> 'Try Out SBMPTN IPA, IPS, IPC "Get Ready to Shine"',
        	'due_date'		=> date('Y-m-d h:i:sa', mktime(11, 14, 54, 23, 12, 2016)),
        	'description'	=> 'Try Out SBMPTN IPA, IPS, IPC "Get Ready to Shine"
                          Tanggal : 31 Januari 2016
                          Tempat : Hall Basket Senayan, Jakarta
                          Informasi lebih lanjut : @trofifebui | www.trofifebui.co.nr',
        ]);
      
      Events::create([
        	'user_id'		=> 1,
        	'location'		=> 'Jakarta, Indonesia',
        	'title'			=> 'Sonic Linguistic 2016',
        	'due_date'		=> date('Y-m-d h:i:sa', mktime(11, 14, 54, 18, 12, 2016)),
        	'description'	=> 'Sonic Linguistic 2016 “Show Your Brain in Science, Link Imagination, Our Language, Sport, Art, and Culture”
Tanggal : 17 – 20 Februari 2016
Tempat : MAN Insan Cendekia Serpong, Jl. Cendekia 1 BSD City Sektor XI Tangerang Selatan
Informasi lebih lanjut : Akbar : 089673502629 | Ask.fm : @sonlis2016 | Line ID : nildzakheirizzad | Twitter : @sonlis2016 | Email : slpublikasi@gmail.com | Web : soniclinguistic.com',
        ]);
      
      Events::create([
        	'user_id'		=> 1,
        	'location'		=> 'Jakarta, Indonesia',
        	'title'			=> 'Agyat Nusa "Gemerlap Nusantara"',
        	'due_date'		=> date('Y-m-d h:i:sa', mktime(11, 14, 54, 10, 12, 2016)),
        	'description'	=> 'Agyat Nusa "Gemerlap Nusantara"
Tanggal : Sabtu, 19 Desember 2015
Tempat : Auditorium Harun Nasution, UIN Syarif Hidayatullah, Jakarta
Waktu : 18.30 – Selesai
Informasi lebih lanjut : Asih : 0838 9205 6602 / Pin BB : 7EE5E3E5 | Eli : 0896 6402 4044 / Pin BB : 59263DID | Lukluk : 0813 1066 1506 | www.postar.fitk.uinjkt.ac.id | Twitter : @postar_uinjkt | Instagram : postar_uinjkt',
        ]);
      
      
      Events::create([
        	'user_id'		=> 1,
        	'location'		=> 'Jakarta, Indonesia',
        	'title'			=> 'Tujuh Tujuh Cup “Curious Expedition Reveal the Power of Art”',
        	'due_date'		=> date('Y-m-d h:i:sa', mktime(11, 14, 54, 8, 12, 2016)),
        	'description'	=> 'SMAN 77 Proudly Present : Tujuh Tujuh Cup “Curious Expedition Reveal the Power of Art”
Tanggal : 14  – 19 Desember 2015
Temapt : SMAN 77, Jakarta
Informasi lebih lanjut : Riandzaki : 081293405100 / Line ID : riandzakihafiz | Safira : 0816889348 / Line ID : saaf_ | Winnie : 081296963098 / Line ID : winnindya | Twitter : @official77cup |  Instagram : official77cup',
        ]);
    }
}
