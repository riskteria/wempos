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
            'category'  => 'news',
            'slug'      => 'Sekolah-Jangan-Berkompetisi-Tapi-Berkolaborasi',
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
        
        
        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'Elon Musk Dirikan Sekolah `Eksklusif` Untuk Anaknya',
            'category'  => 'news',
            'slug'      => 'Elon-Musk-Dirikan-Sekolah-Eksklusif-Untuk Anaknya',
        	'intro'		=> 'Jakarta - Elon Musk, CEO Tesla dan SpaceX, lekat dengan sosok yang revolusioner. Sebab ide-ide yang dia lontarkan terkadang "melompat" dari pandangan umum yang ada saat ini.

Seperti tindakan yang dilakukan Elon Musk kali ini, yang tidak setuju dengan pola pendidikan saat ini. Karena itu ia memutuskan untuk mendirikan sekolah sendiri dengan sistem berbeda dari yang ada sekarang, salah satunya dengan menghilangkan tingkatan kelas.',
        	
            'content'	=> 'Jakarta - Elon Musk, CEO Tesla dan SpaceX, lekat dengan sosok yang revolusioner. Sebab ide-ide yang dia lontarkan terkadang "melompat" dari pandangan umum yang ada saat ini.

Seperti tindakan yang dilakukan Elon Musk kali ini, yang tidak setuju dengan pola pendidikan saat ini. Karena itu ia memutuskan untuk mendirikan sekolah sendiri dengan sistem berbeda dari yang ada sekarang, salah satunya dengan menghilangkan tingkatan kelas.

Laman Daily Mail melansir, sekolah yang diberi nama Ad Astra, yang dalam bahasa latin berarti "ke bintang" ini, didirikan Musk di sebuah mansion yang dibelinya beberapa tahun lalu di California.

Sekolah yang hanya memiliki tiga guru ini bertujuan untuk membekali murid-muridnya dengan sebuah keterampilan tertentu, daripada memaksanya untuk mengikuti jadwal yang sudah ditentukan oleh sekolah biasa.

"Adalah sesuatu yang penting untuk mengajarkan tentang pemecahan masalah atau belajar mengenai suatu masalah daripada sekedar mengajarkan alatnya,"ujar Musk.
Musk menggambarkannya dengan seseorang yang akan belajar cara sebuah mesin bekerja. Menurutnya, pendekatan tradisional akan mengajak murid untuk belajar mengenai obeng dan kunci pas terlebih dahulu.

Namun, Musk tidak setuju dengan pendekatan tersebut. Menurutnya, untuk mempelajari mesin bekerja, siswa harus langsung diajak membongkarnya, namun perlu diketahui bahwa untuk membongkarnya diperlukan sebuah obeng.

Sekolah ini telah memiliki 20 murid termasuk lima anak Elon Musk sendiri. Dikabarkan anak-anak lain yang ikut belajar di sekolah itu adalah anak-anak terpilih dari karyawan SpaceX, perusahaan milik Elon Musk.

"Tiap anak memiliki minat yang berbeda-beda, dengan kemampuan dan waktu yang berbeda pula. Oleh karena itu, lebih masuk akal untuk membekali mereka dengan pendidikan yang sesuai dengan bakat dan kemampuan mereka," tambah Musk.
Musk sendiri diketahui ternyata memiliki masa lalu yang kurang menyenangkan ketika bersekolah. Saat bersekolah di Afrika Selatan, Musk kerap menjadi korban bullying teman-temannya. Sebelum akhirnya, ia meneruskan pendidikannya di Amerika Serikat.',
        ]);
        
        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'Bahasa Inggris Dihapus, Lembaga Pendidikan Senang, Kok Bisa?',
            'category'  => 'news',
            'slug'      => 'Bahasa-Inggris-Dihapus-Lembaga-Pendidikan-Senang-Kok-Bisa',
        	'intro'		=> 'Depok - Kementerian Pendidikan dan Kebudayaan (Kemendikbud) berencana meniadakan mata pelajaran Bahasa Inggris untuk kurikulum Sekolah Dasar (SD). Rencana itu disambut baik oleh para pengelola dan staf di tempat kursus Bahasa Inggris, meski mereka mengatakan langkah itu tidaklah tepat.',
        	
            'content'	=> 'Depok - Kementerian Pendidikan dan Kebudayaan (Kemendikbud) berencana meniadakan mata pelajaran Bahasa Inggris untuk kurikulum Sekolah Dasar (SD). Rencana itu disambut baik oleh para pengelola dan staf di tempat kursus Bahasa Inggris, meski mereka mengatakan langkah itu tidaklah tepat.

Salah satunya adalah Lembaga Pendidikan Indonesia Amerika (LPIA) di Jalan Margonda, Depok. Menurut kordinator Bahasa Inggris LPIA, Putu Widiasastra, penghapusan pelajaran Bahasa Inggris memang tidak tepat karena anak-anak perlu mempelajari bahasa dunia ini sejak dini. Selain itu, Bahasa Inggris sudah menjadi kebutuhan bagi siswa, bahkan untuk siswa sekolah dasar.

"Sebagai pengajar, penghapusan Bahasa Inggris untuk siswa SD itu disayangkan," ungkapnya.
Meskipun begitu, ia juga mengaku menyambut dengan baik apabila wacana tersebut memang dilaksanakan. Pasalnya, jika wacana tersebut memang dilaksanakan, maka akan mempengaruhi jumlah siswa yang mendaftar di lembaga tersebut yang dinilai akan semakin meningkat.

Sastra mengakui, dihapusnya mata pelajaran Bahasa Inggris di sekolah dasar akan berdampak pada banyaknya siswa yang akan belajar di lembaga pendidikan Bahasa Inggris. Menuru dia itu dikarenakan orang tua siswa sudah menyadari pentingnya pembelajaran Bahasa Inggris sejak dini.

"Kalau sebagai pengajar di lembaga, saya menyambut dengan baik karena siswa yang mendaftar kemungkinan lebih banyak meskipun jumlahnya tidak akan drastis," kata Sastra.
Ia menambahkan pentingnya Bahasa Inggris bagi siswa untuk dipelajari karena pelajaran ini merupakan bahasa internasional. "Jika ingin maju, Bahasa Inggris penting untuk dipelajari," tambahnya.

Sementara itu, Ryan, siswa kelas lima sekolah dasar, mengaku meskipun ia sudah mendapatkan pelajaran Bahasa Inggris di sekolahnya, ia juga masih mengikuti kursus privat Bahasa Inggris. "Saya juga belajar les bahasa Inggris di rumah, disuruh mama," katanya.',
        ]);
        
        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'SMA 3 Juara Cerdas Cermat se Aceh',
            'category'  => 'news',
            'slug'      => 'SMA-3-Juara-Cerdas-Cermat-se-Aceh',
        	'intro'		=> 'Banda Aceh - Dinas Pendidikan Aceh kembali mengadakan lomba cerdas cermat jenjang Sekolah Menengah Atas (SMA). Peserta lomba tersebut merupakan utusan terbaik dari masing-masing Unit Pelaksana Teknis Dinas-Pusat Peningkatan Mutu Guru (UPTD-PPMG) di seluruh Aceh. Lomba tersebut dihelat di aula PPMG Wilayah I, Sabtu, 28 November 2015, Kota Banda Aceh.',
        	
            'content'	=> 'Banda Aceh - Dinas Pendidikan Aceh kembali mengadakan lomba cerdas cermat jenjang Sekolah Menengah Atas (SMA). Peserta lomba tersebut merupakan utusan terbaik dari masing-masing Unit Pelaksana Teknis Dinas-Pusat Peningkatan Mutu Guru (UPTD-PPMG) di seluruh Aceh. Lomba tersebut dihelat di aula PPMG Wilayah I, Sabtu, 28 November 2015, Kota Banda Aceh.

Kegiatan tersebut dibuka Kepala Dinas Pendidikan Aceh, Drs. Hasanuddin Darjo, MM. Dalam arahannya saat membuka lomba cerdas cermat itu ia mengatakan, lomba cerdas cermat yang diselenggarakan pihaknya merupakan kegiatan untuk menghasilkan anak-anak negeri yang cerdas dan cermat.

"Kegiatan yang kita laksanakan hari ini merupakan upaya untuk menghasilkan generasi bangsa yang cerdas dan cermat. Melalui lomba ini, kita harapkan tidak hanya cerdas dan cermat, namun juga tangkas untuk menjawab soal," kata Kadis Pendidikan Aceh, Drs. Hasanuddin Darjo, MM.
Menurutnya, perlu ditanamkan rasa cerdas, cermat dan tangkas kepada generasi bangsa sejak kecil. Ini guna memperkecil dan menghilangkan kesalahan dan berfikir harus menjadi orang yang cerdas, cermat. Sehingga, kecerdasan tidak menghasilkan kesalahan.

"Banyak cara dilakukan untuk mencerdaskan anak didik kita. Salah satu tujuan kemerdekaan negeri ini adalah mencerdaskan kehidupan bangsa," ujarnya.
Ke depan ia juga mengharapkan lomba cerdas cermat akan lebih semarak lagi dari tahun-tahun sebelumnya. Ia mendambakan di tahun selanjutnya digelar di tempat-tempat terbuka serta mengundang para dewan guru di daerah untuk menyaksikan anak didiknya mengikuti lomba tersebut, harapnya.

Kepala UPTD Tekkomdik pada Dinas Pendidikan Aceh, Drs, Zulkarnaini, menjelaskan, tujuan utama diselenggarakan lomba cerdas cermat itu untuk memotivasi semangat para pelajar. Di samping itu, lanjut dia lomba dimaksud sekaligus sebagai ajang silaturahmi antar peserta didik di seluruh Aceh.

"Ajang ini mempertemukan siswa dari masing-masing kabupaten/kota untuk bersilaturahmi. Melalui kegiatan ini mereka langsung bisa berkomunikasi dengan baik," kata Zulkarnaini.
Sebanyak delapan SMA dari delapan PPMG di Aceh, mengikuti lomba cerdas cermat tersebut. Delapan sekolah tersebut meliputi, PPMG Wilayah I (SMAN 3 Banda Aceh) PPMG Wilayah II (SMAN Unggul Sigli). Selanjutnya, PPMG wilayah III (SMAN 1 Bireuen) PPMG Wilayah IV (SMAN 1 Langsa), PPMG Wilayah V (SMAN 4 Takengon), PPMG Wilayah VII (SMAN 1 Meulaboh), PPMG Wilayah VIII (SMAN Unggul Harapan Persada Abdya) dan PPMG Wilayah IX (SMAN Unggul Tapak Tuan).

Sepanjang lomba tersebut berlangsung, tiga SMA masing-masing SMAN 3 Banda Aceh utusan PPMG Wilayah I, SMAN Unggul Tapak Tuan utusan PPMG Wilayah IX dan SMAN Unggul Harapan Persada Abdya utusan PPMG Wilayah VIII, masuk pada babak final.

Berikut ini skor tiga sekolah yang masuk pada babak final :
SMAN 3 Banda Aceh (175)
SMAN Unggul Tapak Tuan (115)
SMAN Unggul Harapan Persada Abdya (55)

Hasil Akhir/Final :
Juara I :
SMA Negeri 3 Banda Aceh (Skor : 185)

Juara II :
SMAN Unggul Harapan Persada Abdya (Skor : 100)

Juara III : 
SMAN Unggul Tapak Tuan (Skor : 90)',
        ]);
        
        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'Penuh semangat, anak-anak SDN Andir Kidul cap tangan lawan korupsi',
            'category'  => 'news',
            'slug'      => 'Penuh-semangat-anak-anak-SDN-Andir-Kidul-cap-tangan-lawan-korupsi',
        	'intro'		=> 'Bandung - Halaman SDN Andir Kidul, Jalan AH Nasution, Kota Bandung tampak riuh. Pelajar kelas 1 sampai 6 tumplek di halaman yang di kelilingi ruang kelas. Bukan mau upacara atau lomba, namun mereka sedang menyisikan waktu untuk peduli terhadap Indonesia tentang pemberantasan korupsi',
        	
            'content'	=> 'Bandung - Halaman SDN Andir Kidul, Jalan AH Nasution, Kota Bandung tampak riuh. Pelajar kelas 1 sampai 6 tumplek di halaman yang di kelilingi ruang kelas. Bukan mau upacara atau lomba, namun mereka sedang menyisikan waktu untuk peduli terhadap Indonesia tentang pemberantasan korupsi.

Tangan Nazra rela berlumur cat warna kuning. Kemudian jemarinya terbuka dan memberikan cap tangan di atas kain perca. Kain putih itu sendiri dinamakan kain perca integritas.

Usai membubuhkan cap tangan di kain berukuran sekitar 20x20 cm, Nazra menuliskan pesan tentang melawan korupsi.

"Saya Ingin Indonesia terjauh dari korupsi," tutur siswi kelas V tersebut, Jumat (27/11).
Dia berharap, Indonesia bisa menjadi negara maju tanpa korupsi. "Katanya enggak korupsi hebat!"

Sama hal dengan Nabila. Siswi kelas V ini juga membubuhkan cap tangan di kain perca integritas. Kemudian Nabila menuliskan pesan.

"Saya anak antikorupsi," jelasnya. Nabila mengaku ingin mengenal pelajaran antikorupsi sejak kecil. Sehingga kegiatan ringan yang dilakukan di sekolahnya disambut baik.
Ada 1.500 cap tangan terkumpul beserta pesan terhadap upaya pemberantasan korupsi.

"Sebanyak 1.159 siswa siswi dari kelas satu sampai enam, 58 guru dan sisanya orang tua siswa turut partisipasi dalam kegiatan ini," terang kepala sekolah SDN Andir Kidul Ahmad Taufan Hidayat di sela kegiatan.
Dia membebaskan murid untuk menuliskan pesan tentang melawan korupsi. "Kami mempersilakan mimpi mereka apa terkait pemberantasan korupsi," tandasnya.

Kain perca tersebut menurutnya akan dikumpulkan untuk diserahkan pada penyelenggara "Saya Perempuan Antikorupsi, dan rumpun Indonesia."

Kain tersebut kemudian akan dikumpulkan di Alun-Alun Bandung pada puncak peringatan hari antikorupsi 9 Desember mendatang.',
        ]);
        
                Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'SMA Bima Rebut 3 gelar Kejuaraan Sepak bola Student School League antar SMA/ SMK Se kabupaten Jember',
            'category'  => 'activity',
            'slug'      => 'SMA-Bima-Rebut-3-gelar-Kejuaraan-Sepak-bola-Student-School-League-antar-SMA-SMKSekabupatenJember',
        	'intro'		=> 'JEMBER - Final kejuaraan sepak bola Jember student league antar SMA/SMK sekabupaten Jember berakhir selasa sore 28/10/ 2014 dan Kesebelasan SMA Bima Ambulu dinobatkan sebagai juara setelah menang melalui adu pinalti dengan skor akhir 5-3 atas lawannya dari SMK PGRI 3 tanggul',
        	
            'content'	=> 'JEMBER - Final kejuaraan sepak bola Jember student league antar SMA/SMK sekabupaten Jember berakhir selasa sore 28/10/ 2014 dan Kesebelasan SMA Bima Ambulu dinobatkan sebagai juara setelah menang melalui adu pinalti dengan skor akhir 5-3 atas lawannya dari SMK PGRI 3 tanggul.

Jalannya laga babak pertama kedua team tampil ngotot silih berganti mengancam gawang lawannya, namun tak satupun lahir gol di babak pertama mereka harus berbagi angka 0-0. Pertandingan babak kedua tensi permainan kedua team berjalan dalam tempo tinggi dam menit ke 12 SMA Bima Ambulu dapat hadiah pinalti dari wasit wawan dari askap PSSI Jember yang berawal dari pelanggaran dilakukan pemain wing back kiri SMK PGRI 3 Tanggul yang mentakling keras pemain depan SMA bima ambulu Faijin diarea kotak pinalti. Faijin bertindak sebagai eksekutor suskes mempedayai penjaga gawang SMK PGRI 3 tanggul, 1-0 SMA Bima Ambulu unggul.

10 menit kemudian kini giliran SMK PGRI 3 Tanggul dapat hadiah pinalti setelah terjadi hands ball dilakukan oleh pemain belakang lawan. Firma penjaga SMK PGRI 3 tanggul dipercaya mengambil tendangan 12 pas berhasil menyeimbangakan skor menjadi 1-1. Skor tersebut bertahan hingga peluit tanda waktu babak kedua berakhir.

Untuk menentukan pemenangnya dilakukan 5 kali tendangan pinalti dewi fortuna lebih berpihak pada SMA bima ambulu dari 5 eksekutor 1 gagal menyarangkan gol sedangkan 2 penendang SMK PGRI 3 tanggul gagal melaksanakan tugasnya dengan baik.

Manager SMA bima ambulu H abdul Wahap mengaku kemenangan ini hasil kerja keras dan persiapan yang matang dilakukan pelatih

"Tentunya berkah ini atas kehendak dari ridho Allah SWT sehingga anak anak bisa membawa pulang tiga gelar juara, yakni peringkat pertama team A dan peringkat ketiga team B serta juara ketiga team sepak bola putri" katanya
Sementara Sugeng sudibyo pelatih SMK PGRI 3 tanggul sejak awal pertandingan mengaku sangat optimis bisa menjegal lawannya.

"Tetapi nasib menentukan beda kedua team saya akui bermain sangat bagus sepanjang laga kalau tahun lalu kami yang menang hari ini mereka bisa balas" kata sugeng.
Sementara kegagalan pemainnya dalam tendangan pinalti disebabkan 3 pemainnya kurang maksimal karena sehari sebelumnya 3 pemain intinya harus membela team Jember united Yunior pada babak semi final GROUP 4 piala suratin (Lana/Ar3)

Hasil selengkapnya kejuaraan Student school League juara pertama SMA bima ambulu . Peringkat dua SMK PGRI 3 tanggul dan SMA 3 jember Sebagai peringkat 3 Lantas SMA bima ambulu B menempati posisi 4// Juara sepak bola putri SMA 3 jember . disusul posisi kedua SMKN 4 jember dan peringkat 3 SMA Bima Ambulu// RRI lana',
        ]);
        
        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'SMA Diponegoro Blitar dan SMAN 71 Jakarta Juara Kompetisi Loop 3x3',
            'category'  => 'activity',
            'slug'      => 'SMA-Diponegoro-Blitar-dan-SMAN-71-Jakarta-JuaraKompetisi-Loop-3x3',
        	'intro'		=> 'JAKARTA - Tim putri SMA Diponegoro Blitar dan tim putra SMA Negeri 71 Jakarta keluar sebagai juara Loop 3x3 Competition National Championship. Sebagai juara, mereka berhak mendapatkan tiket ke Amerika Serikat.',
        	
            'content'	=> 'JAKARTA - Tim putri SMA Diponegoro Blitar dan tim putra SMA Negeri 71 Jakarta keluar sebagai juara Loop 3x3 Competition National Championship. Sebagai juara, mereka berhak mendapatkan tiket ke Amerika Serikat.

Di bagian putra, SMAN 71 mengalahkan juara bertahan, SMA IPH Surabaya, lewat laga sengit yang berakhir dengan skor 15-10 dalam final yang berlangsung di Atrium Gandaria City, Jakarta, pada Minggu (11/10/2015) malam.

Salah satu penggawa SMAN 71 Jakarta, Yohanes Bryant, mengaku bangga bisa memenangi pertandingan final Loop 3x3 tahun ini. Terlebih, ia dan timnya tanpa melakukan persiapan sama sekali.

"Enggak nyangka soalnya kami tanpa persiapan sama sekali. Persiapannya pas H-1 saja, dan percaya diri saja. Kami sama-sama sibuk di sekolah, dan main di klub basket DKI, Pokeba. Hanya satu yang di klub Indonesia Muda, yaitu Erlan Perkasa," kata pengidola Kobe Bryant ini.

"Belum tahu di Amerika akan melakukan apa. Yang pasti kami ingin menikmati perjalanan dan menimba ilmu beberapa hari di sana (Amerika)," lanjutnya.
Sementara itu di bagian putri, SMA Diponegoro Blitar memastikan kemenangannya setelah mengalahkan SMA Tritunggal Semarang, 14-12. Kemenangan tersebut harus ditentukan lewat babak sudden death setelah kedua tim bermain imbang 12-12 dalam 10 menit waktu pertandingan.

Tim Dipenogoro yang diperkuat Roziah, Siti Nor Khotinah, Rita Panasari, dan Dena Retnadia, ini awalnya tertinggal lebih dulu 1-4 dari Tri Tunggal. Namun mereka mampu mengejar dan menyamakan skor menjadi 10-10.

Pada 14 detik terakhir, laga berlangsung sengit. Masing-masing tim berhasil menambah poin hingga akhirnya kedudukan imbang 12-12 hingga waktu 10 menit pertandingan habis. Di babak sudden death, Diponegoro berhasil mencuri dua poin lewat tembakan Roziah.

"Enggak menyangka sama sekali karena dari awal kami tidak ada target untuk menjadi juara. Apalagi ini keikutsertaan kami yang pertama dan langsung menjadi juara. Senang banget," ungkap Roziah yang tampak semringah.

"Agak kaget juga. Tadi pas overtime mikirnya bagaimana supaya bisa langsung menang karena cepat-cepatan raih angka. Ya mau tidak mau harus main dua poin biar langsung menang. Ternyata bisa," pungkas Roziah.
Sebagai juara, SMA Diponegoro Blitar dan SMAN 71 Jakarta berhak mendapatkan hadiah utama yakni tiket ke Amerika Serikat. Mereka akan terbang ke 'Negeri Paman Sam' pada bulan November mendatang. Tahun lalu, juara kompetisi ini, SMA IPH Surabaya dan SMA Tri Tunggal Semarang, juga diterbangkan ke AS dan mendapat kesempatan untuk mengikuti coaching clinic, menonton laga basket, dan mengikuti seminar soal basket.',
        ]);
        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'SMK 1 Bontang Raja Sepak Bola Kaltim',
            'category'  => 'activity',
            'slug'      => 'SMK-1-Bontang-Raja-Sepak-Bola-Kaltim',
        	'intro'		=> 'BONTANG - Kabar gembira datang dari ibu kota Samarinda. SMK 1 Bontang yang mewakili Kota Taman di turnamen sepak bola bertajuk Liga Pelajar Indonesia (LPI) Kaltim 2015 garapan Dinas Pendidikan (Disdik) Kaltim, sukses menjadi yang terbaik.',
        	
            'content'	=> 'BONTANG - Kabar gembira datang dari ibu kota Samarinda. SMK 1 Bontang yang mewakili Kota Taman di turnamen sepak bola bertajuk Liga Pelajar Indonesia (LPI) Kaltim 2015 garapan Dinas Pendidikan (Disdik) Kaltim, sukses menjadi yang terbaik.

Bermain di lapangan sepak bola Kompi Senapan A Yonif 611/Awl di Samarinda Seberang, Kamis (17/9) kemarin, anak asuh duet pelatih Nurdin dan Darmawan tersebut, menang tipis atas SMK Geologi Pertambangan (GP) Tenggarong, Kutai Kartanegara (Kukar) dengan skor 2-1.

Gol-gol SMK 1 Bontang dicetak oleh Sandi dan Wahyu, sementara SMK GP Tenggarong memperkecil skor lewat titik putih. Tak hanya menggenggam juara, penyerang SMK 1 Bontang, Beni Oktovianto juga dinobatkan sebagai pencetak gol terbanyak dengan torehan empat golnya selama turnamen.

Dari penyisihan hingga final, SMK 1 Bontang menjadi kesebelasan yang tidak terkalahkan. Di grup D, mereka sukses menjadi juara grup setelah menghantam SMA 1 Berau dengan skor 9-0. Kemudian di babak semifinal, mereka menang atas tim kuat Balikpapan, SMK 1 Balikpapan dengan sko 2-0. Sampai ke final, para utusan Bontang itupun membekap SMK GP Tenggarong 2-1.

“Anak-anak sebenarnya sudah kecapekan. Semifinal lawan Balikpapan digelar tadi (kemarin, Red.) di Loa Janan (lapangan sepak bola Mayon 611/Awl di Loa Janan, Red.) pukul 08.00 Wita. Kemudian pukul 11.00 Wita kami langsung final lawan Tenggarong. Kalau yang lain main 2 X 35 menit, kami main 4 X 35 menit,” kata Darmawan, kemarin.
Kendati demikian, rasa lelah dan letih itu terbayarkan dengan keberhasilan SMK 1 Bontang menjadi yang terbaik di Kaltim. “Insya Allah SMK 1 Bontang akan mewakili Kaltim di LPI tingkat nasional. Cuma, kami belum dapat informasi kapan digelar LPI nasional itu,” kata pria yang sukses mempersembahkan emas bergengsi di cabang olahraga (cabor) sepak bola, saat Pekan Olahraga Pelajar Provinsi (Popprov) XIII/2014 Kaltim-Kaltara.

Hasil ini sekaligus menjadi pengobat luka atas kegagalan SMK 1 Bontang di LPI Kaltim 2014 lalu. Pasalnya, berstatus sebagai juara bertahan LPI 2013 Kaltim, SMK 1 Bontang justru tersingkir di babak penyisihan.

“2013 lalu kami juara LPI Kaltim, kemudian 2014 gagal juara karena tersisih di babak penyisihan. Alhamdulillah, tahun 2015 menjadi juara lagi. Ini berkat kerja keras pemain terus berlatih secara serius,” tegasnya.
Mendengar kabar SMK 1 Bontang juara, kepala Dinas Pemuda dan Olahraga (Dispora) Bontang, Bambang Cipto Mulyono girang bukan kepalang. Menurutnya, prestasi itu sangat membanggakan. Hal itu sekaligus menegaskan bahwa pembinaan olahraga di Bontang berjalan dengan baik. Di Bontang, LPI digelar oleh Dispora.

Bambang menyebut, LPI merupakan salah satu kalender kegiatan sepak bola di Bontang. “Harapannya, LPI juga dapat memberikan kontribusi kepada PSSI untuk selanjutnya dilatih dan dibina, agar menjadi pemain sepak bola unggul, yang selanjutnya bisa menjadi aset bagi Bontang. Kalau perlu, Bontang menjadi raja sepak bola Kaltim maupun nasional,” jelasnya

. Sebagai informasi, turnamen itu sendiri digelar Dinas Pendidikan (Disdik) Kaltim di dua tempat berbeda, yakni di lapangan sepak bola Kompi Senapan A Yonif 611/Awl Samarinda Seberang dan lapangan sepak bola Mayon 611/Awl Loa Janan, 14-17 September. LPI merupakan agenda tahunan yang dilaksanakan berjenjang dari tingkat kabupaten/kota, provinsi, kemudian nasional.

Sebanyak 10 sekolah yang menjadi juara LPI di 10 kabupaten/kota se-Kaltim ambil bagian dalam turnamen ini. Pemerintah menyiapkan hadiah untuk juara I sebesar Rp 30 juta, juara II Rp 25 juta, dan juara II Rp 20 juta. Selain itu, untuk pemain terbaik, gol terbanyak dan pelatih juga diberikan penghargaan.',
        ]);
        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'SMA Instindo Kalahkan SMK Terbang dengan skor 4-2',
            'category'  => 'activity',
            'slug'      => 'SMA-Instindo-Kalahkan-SMK-Terbang-dengan-skor-4-2',
        	'intro'		=> 'Semarang - SMA Institut Indonesia (Instindo) berhasil memenangkan laga pembuka Hydro Coco National Futsal Tournament 2015 Regional Semarang babak 32 besar dimulai Di GOR Sumber Waras, Jumat (18/9/2015) siang. Anak asuh Edi Yulianto berhasil tekuk SMK Terang Bangsa dengan skor 4-2 secara dramatis.',
        	
            'content'	=> 'Semarang - SMA Institut Indonesia (Instindo) berhasil memenangkan laga pembuka Hydro Coco National Futsal Tournament 2015 Regional Semarang babak 32 besar dimulai Di GOR Sumber Waras, Jumat (18/9/2015) siang. Anak asuh Edi Yulianto berhasil tekuk SMK Terang Bangsa dengan skor 4-2 secara dramatis.

Instindo Juara Putih Abu-Abu Futsal Tribun Jateng 2013 sempat bermain dengan empat orang saat Guntur dikeluarkan wasit pada menit ke 14. Pemain bernomor punggung dua itu dinilai melakukan sikutan berbahaya kepada pemain SMK Terbang. Padahal skor saat itu masih 3-2 untuk keunggulan SMA Instindo.

"Saya tidak melihat jelas apa alasan wasit mengeluarkan Guntur dengan kartu merah. Namun saya bangga anak-anak meski dalam dua menit setelahnya hanya bermain dengan empat orang tapi bisa menahan gempuran SMK Terbang yang mengejar ketertinggalan," ujar Edi Seusai laga.
Jalannya pertandingan antara SMA Instindo dan SMK Terbang memang berjalan saling serang dengan tempo tinggi. Babak yang menggunakan 2x10 menit membuat para pemain memaksimalkan waktu yang ada untuk membuat peluang. Babak pertama berakhir, skor 2-1 untuk keunggulan SMA Instindo.

Memasuki babak kedua SMA Instindo melakukan serangan sporadis. Dhimas mampu manfaatkan peluang dari kaki Lintang yang menyisir di sisi kiri di menit ke-11 skor berubah menjadi 3-1. Pemain Terbang setelah itu bereaksi saat mendapatkan sepakan bebas. Yoli dengan tendangan terukurnya mampu kejar ketertinggalan menjadi 3-2 di menit ke-13.

Barulah kejadian kartu merah untuk Guntur itu terjadi. Keunggulan pemain selama dua menit gagal dimanfaatkan pemain Terbang di sisi waktu lima menit terakhir. Malah SMA Instindo berhasil mencetak gol dari pencetak satu gol sebelumnya Rizal di menit-menit akhir. Skor 4-2 bertahan hingga waktu berakhir.',
        ]);
        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'Kompetisi Wirausaha Tingkat Sekolah Menengah',
            'category'  => 'activity',
            'slug'      => 'Kompetisi-Wirausaha-Tingkat-Sekolah-Menengah',
        	'intro'		=> 'Semarang - SMA Institut Indonesia (Instindo) berhasil memenangkan laga pembuka Hydro Coco National Futsal Tournament 2015 Regional Semarang babak 32 besar dimulai Di GOR Sumber Waras, Jumat (18/9/2015) siang. Anak asuh Edi Yulianto berhasil tekuk SMK Terang Bangsa dengan skor 4-2 secara dramatis.',
        	
            'content'	=> 'JAKARTA - Indonesia Student Company Competition merupakan kompetisi wirausaha tingkat sekolah menengah. Agenda tahunan Prestasi Junior Indonesia ini bukan hanya kompetisi bisnis biasa untuk siswa, tetapi untuk mencari keseimbangan antara pencapaian bisnis dari tiap tim dan perkembangan kemampuan personal tiap peserta. ”Mereka yang hadir merupakan perwakilan dari berbagai kota.

Saya merasakan betul bagaimana semangat juang mereka yang muda hadir di sini,” kata Ketua Yayasan Prestasi Junior Indonesia, Pribadi Setyanto saat ditemui di Citywalk, Jakarta, baru-baru ini.
Melalui kompetisi regional di beberapa daerah Indonesia antara lain Jakarta, Yogyakarta, Semarang, Surabaya, Medan, Bandung, dan Kalimantan, terpilih 11 sekolah yang berhasil melaju ke kompetisi nasional.

Ke-11 sekolah tersebut adalah SMA Pembangunan Jaya Jakarta, SMA3 Semarang, SMA 1 Sleman, SMK Bina Informatika, SMK 6 Jakarta, SMK 4 Denpasar, SMAWachid Hashim Sidoarjo, SMK 1 Rota Bayat, SMK 4 Padalarang, SMA 1 Rantau Pulung, dan SMK 3 Medan.

”Kami membuat tas menggunakan jenis kain antiair. Gunanya untuk mengantisipasi ketika musim hujan, gaya yang trendi, dan dapat digunakan seperti backpack,” kata Sania Amalia Z, Sales dan Inventory Manager Golden Ganesha SC dari SMA3 Semarang.
Sementara Direktur Jenderal Pendidikan Dasar dan Menengah Kementerian Pendidikan dan Kebudayaan (Dirjen Dikdasmen Kemdikbud) Hamid Muhammad menyatakan bangga pada kompetisi yang diadakan Prestasi Junior Indonesia. ”Ini inisiatif yang luar biasa. Kita memang perlu terobosan-terobosan baru untuk memberikan inspirasi kepada anak-anak,” kata Hamid.

Kompetisi ini merupakan salah satu cara mempersiapkan generasi muda pada masa datang untuk mencari solusi dan mengatasi masalah ekonomi. ”Anak-anak bisa apa pun, yang penting difasilitasi.

Siapkan anak-anak agar bisa bertahan pada masa datang,” tuturnya. Jika Indonesia tidak mempersiapkan dengan baik, dia khawatir generasi penerus tidak dapat memberikan bonus ekonomi. (nya-95).',
        ]);
        
        Articles::create([
        	'user_id'	=> 1,
        	'title'		=> 'Sekolah Robot Indonesia Gelar Kompetisi Robot Tingkat Dunia',
            'category'  => 'activity',
            'slug'      => 'Sekolah-Robot-Indonesia-Gelar-Kompetisi-Robot-Tingkat-Dunia',
        	'intro'		=> 'JAKARTA - Sekolah Robot Indonesia (SARI) bersama Mall Of Indonesia (MOI) tahun ini menggelar 2 (dua) Even berskala dunia dan Nasional.

Event pertama adalah World Robot Games 2015 yang akan diselenggarakan pada 1-3 Juni 2015. Peserta lomba pada even ini diharuskan membuat robot dari bahan daur ulang.',
        	
            'content'	=> 'JAKARTA - Sekolah Robot Indonesia (SARI) bersama Mall Of Indonesia (MOI) tahun ini menggelar 2 (dua) Even berskala dunia dan Nasional.

Event pertama adalah World Robot Games 2015 yang akan diselenggarakan pada 1-3 Juni 2015. Peserta lomba pada even ini diharuskan membuat robot dari bahan daur ulang.

Penyelenggaraan kompetisi terbesar tersebut melibatkan peserta lomba robot dari 50 sekolah yang berasal dari Indonesia, Singapura, Thailand dan Filipina, dimana masing-masing sekolah mengirimkan minimal 3 anak didiknya.

World Robot Games 2015 terdiri atas golongan junior yaitu kelompok usia TK hingga SD, dan golongan senior yaitu kelompok usia SMP hingga SMA. Terdapat 10 kategori lomba dimana kategori tersebut disesuaikan dengan jenjang pendidikan masing-masing dan tingkat kesulitan dari lomba itu sendiri.

Even kedua adalah Robotic School Cup 2015 yang diselenggarakan untuk keenam kalinya oleh SARI. Untuk even ini akan digelar pada 4-7 Juni 2015 di main Atrium Lobby 1 dan Lobby 5 Mall Of Indonesia, Kelapa Gading, Jakarta.

Robotic School Cup 2015 melibatkan 400 peserta dari sekolah yang berlokasi di Jakarta. Kompetisi ini juga terdiri atas golongan junior (TK hingga SD) dan golongan senior (SMP hingga SMA), serta terdiri dari 18 kategori lomba.

"Perkembangan pendidikan robotik di Indonesia telah berkembang pesat . Sejak 2002 , berbagai institusi telah mencoba untuk memperkenalkan pendidikan robotik dan mengembangkan robotik sebagai pendidikan teknologi ," ujar Yohanes Kurnia selaku Founder SARI melalui keterangan resminya.',
        ]);
	}
}