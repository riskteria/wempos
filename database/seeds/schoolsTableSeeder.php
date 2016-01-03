<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Schools as Schools;

class schoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Schools::create([
            'user_id'       => 2,
            'nama_sekolah'  => 'SMK Telkom Sandy Putra Medan',
            'jenjang'       => 'SMK',
            'tipe'          => 'Swasta',
            'alamat'        => 'Jl. Halat No. 68',
            'kota'          => 'Medan',
            'provinsi'      => 'Sumatera Utara',
            'nomor_pokok'   => '10259305',
            'confirmed'     => true,
            'profil'        => 'Pada tahun 1991 istri Kepala Divisi Regional dan para Dharma Wanita PT.Telkom membentuk suatu kegiatan yang bergerak dalam bidang pendidikan yang berdasarkan Pancasila dan Undang-undang Dasar 1945. Pada awalnya para Dharma Wanita PT.Telkom ini hanya mendirikan sekolah tingkat TK ( Taman Kanak-Kanak ).

Kegiatan ini pada dasarnya adalah untuk membuat kesibukan para istri-istri pegawai PT.Telkom yang tergabung dalam Dharma Wanita. Kegiatan ini ternyata didukung oleh Kepala Divisi Regional PT.Telkom dan mendapat respon yang sangat positif. Tujuan dari didirikannnya Sekolah Taman Kanak-kanak ini adalah untuk menampung anak-anak para karyawan PT.Telkom bersekolah di Sekolah Taman Kanak-kanak Sandhy Putra.

Sekolah Taman Kanak-kanak yang dikelola khususnya untuk wilayah Sumatera mengalami kemajuan. Pada waktu itu PT.Telkom masih bernaung dalam Parpostel ( Pariwisata, Pos dan Telekomunikasi ). Mengingat Telekomunikasi dan Kepariwisataan Indonesia pada tahun 1992 sangat berkembang pesat, maka timbul keinginan para Dharma Wanita untuk mendirikan sekolah Telekomunikasi dan Pariwisata.

Tergerak dengan panggilan anak Bangsa, maka didirikanlah Sekolah Tehnik Telekomunikasi dengan nama STM Telkom Sandhy Putra dan Sekolah Menengah Industri Pariwisata ( SMIP ) pada tanggal 20 Juli 1992.

Pada dasarnya tujuan didirikannya SMIP Sandhy Putra-2 ini yang sekarang di kenal SMK Pariwisata Sandhy Putra-2 adalah untuk mencerdaskan kehidupan bangsa dan menampung anak-anak Pegawai PT.Telkom khususnya dan anak- anak di luar PT.Telkom umumnya untuk melanjutkan pendidikan Tingkat Menengah yang setara dengan SLTA

Namun seiring dengan kemajuan jaman dan perkembangan dunia pendidikan akhirnya dibeberapa daerah didirikan SMK pariwisata dan Telekomunikasi, disamping itu ada juga SD, SMP, SMA dan bahkan tingkat Akademi. Sekolah Menengah Kejuruan Pariwisata selain di Medan juga ada di Makasar sedangkan SMK Telekomunikasi selain di Medan juga ada di Malang, Purwokerto, Jakarta, Makasar dan Banjarbaru, Kalimantan Selatan. Selain itu satu Sekolah Dasar ada di Batam, satu SMA di Bandung dan satu SMP di Bandung. Sementara itu Akademi Pariwisata Sandhy Putra berada di Bandung dan Akademi Telekomunikasi Sandhy Putra berada di Jakarta dan Purwokerto.

SMK Sandhy Putra-2 Medan sendiri, telah menamatkan kurang lebih 1500 tamatan yang tersebar diseluruh Indonesia, bahkan manca negara. Para tamatan telah bekerja di bidang pariwisata baik di hotel-hotel berbintang, kapal pesiar, maupun airlines dan agen-agen perjalanan.

Sampai saat ini SMK Sandhy putra-2 Medan terus berupaya untuk meningkatkan kualitas pelayanannya kepada siswa sebagai customer, guru dan masyarakat serta stake holder yang lain guna memberika kontribusi dalam pembangunan bangsa dibidang pendidikan.',
            'fasilitas'     => '#Sarana Ibadah/Mushollah 
                                #Sarana Olah Raga
                                #Laboratorim Perhotelan
                                #Laboratorium Usaha Perjalanan Wisata
                                #Laboratorium Komputer
                                #Laboratorium Bahasa
                                #Perpustakaan
                                #Akses Internet
                                #Ruang Piket Guru
                                #Kantin
                                #Toilet Siswa
                                #Aula
                                #Ruang Siaran Radio Siswa
                                #Ruang Osis',
            'prestasi'      => '#Juara III Sumatera Networking Competition 2015 
                                #Juara III Telcom Distribution Technology - LKS Nasional 2014 
                                #Juara II Olimpiade Biologi (2012) dan Juara I Olimpiade Matematika (2010) dlm OSTN Provinsi 
                                #Juara III (Provinsi) dan Juara I (Kotamadya) bidang IT Network Support di LKS SMK 2013 
                                #Juara I Animasi - LKS Kota Medan 2012 
                                #5 Piala LKS Kota Medan 2012 dan 4 Piala untuk tahun 2013 
                                #Juara I Debat Bahasa Inggris tingkat Provinsi 2011 dan Juara I Debat Bahasa Inggris tingkat Kota 2010 s.d. 2012 
                                #Best Speaker dalam Debat Bahasa Inggris 2010 s.d. 2012 
                                #Juara III Erlangga English Speech Contest for SMK 2012 - Wil. Medan & sekitarnya 
                                #Juara III Debat Bahasa Indonesia 2012, 
                                #Juara I Formasi Pengibaran Bendera 
                                #Juara I Lomba Tari Daerah Tingkat Provinsi - DERAP MAN 2 2011 
                                #Juara I Basket tingkat SUMUT dalam O2SN 2013 dan 2014 
                                #Juara I Floret Junior Putra - Taekwondo 2012 
                                #Aktris terbaik dalam perlombaan Teater tingkat kota',
            'biaya'         => '#Pembangunan Rp. 5.500.000 
                                #SPP/bulan Rp. 550.000',
            'kegiatan'      => '#Basket Ball 
                                #Bulu Tangkis 
                                #Tenis Meja 
                                #Futsal 
                                #Tari 
                                #Marching Band 
                                #Paduan Suara 
                                #Pramuka',

        ]);

        Schools::create([
            'user_id'       => null,
            'nama_sekolah'  => 'SD PANGUDI LUHUR JAKARTA SELATAN ',
            'jenjang'       => 'SD',
            'tipe'          => 'Swasta',
            'alamat'        => 'Jl. H. Nawi No. 21 ',
            'kota'          => 'Jakarta Selatan',
            'provinsi'      => 'D.K.I Jakrta',
            'nomor_pokok'   => '20106310',
            'confirmed'     => true,
            'profil'        => 'Pada tahun 1963, datang permintaan mendesak dari Mgr. A. Djajaseputra, Sj agar FIC membuka sekolah. Menanggapi permintaan tersebut, FIC membuka karya pendidikan SMA Putra Kebayoran, dan pada tahun 1965 resmi Sekolah Menengah Atas mulai beroperasi.
Setelah sekolah Pangudi Luhur di Jakarta berkembang pesat, maka datanglah permintaan baru dari lingkungan Cipete, agar para Bruder FIC mendirikan sekolah TK dan SD. Segera dibentuklah panitia pendirian sekolah yang anggotanya antara lain Bpk. Drs. G. Sugiharso. Dengan restu dari Bpk. Gubernur Ali Sadikin dan Nyonya, akhirnya bulan Juli 1973 sekolah TK dan SD Pangudi Luhur dapat dibangun dengan bantuan pemerintah DKI dan diresmikan oleh Bapak Gubernur Ali Sadikin.
Sejak semula SD Pangudi Luhur didirikan untuk mendidik anak-anak agar mereka dapat belajar dengan baik sekaligus menanamkan nilai-nilai iman Kristiani.

VISI SD PANGUDI LUHUR JAKARTA
#SD Pangudi Luhur Jakarta merupakan lembaga pendidikan dan pengajaran kaum muda yang unggul dalam sikap, pengetahuan, keterampilan, dan kasih.

MISI SD PANGUDI LUHUR JAKARTA
#Menyelenggarakan pendidikan guna mengembangkan kecerdasan intelektual, emosional, dan spiritual secara seimbang dan serasi.
#Meningkatkan kegiatan pembelajaran yang aktif, inovatif, kreatif, efektif, menyenangkan, dan berbobot.
#Mengembangkan komunikasi dan keterbukaan antarkomponen baik sikap, pengetahuan, maupun keterampilan.
#Mengoptimalkan seluruh sumber daya, baik sumber daya manusia, dana, sarana, prasarana, dan lingkungan dengan dilandasi 3 (tiga) tertib : tertib waktu, tertib belajar/bekerja, tertib administrasi.
#Menciptakan lingkungan sekolah yang aman, hijau, indah, religius, dan kekeluargaan.
#Mengembangkan kebiasaan hidup sehat dan bersih.
#Melaksanakan pelatihan dan pembimbingan belajar secara khusus bagi peserta didik yang memerlukan perhatian khusus (keberpihakan kepada yang membutuhkan).
#Mendorong semangat dan komitmen seluruh warga sekolah kepada perubahan yang lebih baik.
#Mengadakan pembinaan dan pendampingan pengembangan potensi peserta didik secara terprogram dan bertanggung jawab.
#Melaksanakan kegiatan aksi sosial peserta didik dan pegawai untuk keluarga PG/TK/SD Pangudi Luhur Jakarta dan sekolah Pangudi Luhur secara umum yang memerlukan perhatian khusus dan atau gereja universal.
',
            'fasilitas'     => '#Gedung sejolah
                                #Gedung Aula
                                #Ruang Komputer
                                #Laboratorium Ipa
                                #Perpustakaan
                                #lapangan bola dan basket',
            'prestasi'      => 'Kegiatan Akademik yaitu : Cerdas cermat, Bahasa Inggris, Bahasa Mandarin, Perpustakaan, Remidial, Sempoa.
                                Kegiatan Non Akademik yaitu : 
                                #Olah Raga : Bola Basket, Sepak Bola, Footsal, taekwondo.
                                #Kesenian : Seni tari, Seni Lukis, Paduan Suara, Drumband, Ansamble musik, Vocal Group, Cheer Leader.
                                #Majalah Dinding, robotic, sains club, english club, mandarin.
                                #Upacara
                                #Pramuka
                                #Keputrian
                                Mental Spiritual dan Kegiatan Sosial
                                #Bimbingan dan Konseling
                                #Kedisiplinan pribadi
                                #Psikolog
                                #Konselor kelas 1 dan 2
                                #Konselor kelas 3 dan 4
                                #Konselor kelas 5 dan 6
                                #Spiritual
                                #Bina Iman
                                #Kegiatan Liturgis
                                #Retret / pembinaan mental
                                #Usaha Kesehatan Sekolah
                                #Dokter Kecil
                                #Kebersihan lingkungan
                                #Pengobatan dan imunisasi
                                #Penataran serta penyuluhan
                                #Kegiatan lomba
                                #Kegiatan Sosial
                                #Bakti Sosial
                                #Kegiatan Sosial (intern dan ekstern)
                                #Gerakan Orang Tua Asuh (Beasiswa / Santunan)
',
            'biaya'         => '',
            'kegiatan'      => '#Bahasa mandarin
                                #Manga
                                #CLC
                                #Olimpiade Club
                                #ROBOTIK
                                #Marching Band
                                #Color Guard
                                #English Club
                                #Seni Lukis
                                #Seni Tari (Tari Daerah)
                                #Cheerleaders/Modern Dance
                                #Paduan Suara
                                #Wushu
                                #Band
                                #Mini Basket
                                #Sepak Bola/ Futsal
                                #Basket',

        ]);
              Schools::create([
            'user_id'       => null,
            'nama_sekolah'  => 'SDN 1 Mangkujayan',
            'jenjang'       => 'SD',
            'tipe'          => 'Negeri',
            'alamat'        => 'JL. Bali 1 Mangkujayan',
            'kota'          => 'Ponorogo',
            'provinsi'      => 'Jawa Timur',
            'nomor_pokok'   => '20510612',
            'confirmed'     => true,
            'profil'        => 'VISI
                                #Berperilaku Terpuji, Berprestasi Tinggi dan Berbudaya Lingkungan Berdasarkan Iman dan Taqwa serta Nilai Luhur Pancasila

                                MISI
                                #Melaksanakan pengembangan kurikulum yang lengkap dan terdepan
                                #Melaksanakan pengembangan proses pembelajaran yang inovatif
                                #Melaksanakan Pengembangan Pengelolaan Manajemen Sekolah
                                #Melaksanakan pengembangan pembinaan dalam kegiatan ekstrakurikuler
                                #Melaksanakan pengembangan budaya karakter bangsa
                                #Melaksanakan budaya hidup bersih dan sehat sebagai wujud pelestarian terhadap lingkungan.
                                #Melaksanakan kegiatanpencegahan terjadinya pencemaran dan kerusakan lingkungan hidup
                                #Melaksanakan perilaku 3R (Reduce, Reuse, Recycle)
                                #Melaksanakan pengembangan sarana dan prasarana pendidikan
                                #Mengoptimalkan peran masyarakat dan membentuk jejaring dengan stakeholders.
                                #Melaksanakan pengembangan kegiatan keagamaan dan pengamalan nilai pancasila.

                                TUJUAN
                                #Mengembangkan Kurikulum dengan dilengkapi silabus, Rencana Pelaksanaan Pembelajaran, Lembar Kegiatan Siswa dan Sistem Penilaian.
                                #Mengembangkan berbagai pendekatan pembelajaran interaktif diantaranya CTL, PAIKEM, Multiple Intelegences dan Quantum Learning.
                                #Mengembangkan model pembelajaran terintegrasi pendidikan lingkungan hidup
                                #Pengembangan materi dan kajian lingkungan hidup dengan masyarakat sekitar.
                                #Memenuhi kebutuhan sarana dan prasarana kegiatan pembelajaran
                                #Mewujudkan fasilitas sekolah yang interaktif dan berbasis IT
                                #Melaksanakan 3R (Reduce, Reuse, dan Recycle) di sekolah
                                #Melaksanakan pemilahan dan pengolahan sampah organik dan anorganik
                                #Membimbing peserta didik memahami nilai-nilai karakter pancasila.
                                #Menanamkan sikap peduli dan berbudaya lingkungan sehingga tercipta lingkungan sekolah yang bersih, sehat, indah, aman dan nyaman.
                                #Mengoptimalkan kegiatan pengembangan diri untuk meningkatkan kedisiplinan berlalu lintas melalui PKS.
                                #Mengoptimalkan kegiatan Pengembangan Diri untuk menumbuhkan rasa kepedulian sosial melalui PMR.
                                #Mengoptimalkan kegiatan pengembangan diri dalam kedisiplinan dan kreatifitas seni melalui seni musik, seni tari, dan seni lukis.
                                #Mengoptimalkan kegiatan pengembangan diri akademik melalui ekstra MIPA.',
            'fasilitas'     => '#Aula
                                #Perpustakaan
                                #Lab Komputer
                                #Lab Bahasa
                                #Lapangan Olahraga
                                #UKS
                                ',
            'prestasi'      => '',
            'biaya'         => '',
            'kegiatan'      => '#Pramuka 
                                #MIPA
                                #PMR
                                #Bina Vokalia
                                #Futsal
                                #Bola Voli
                                #Basket
                                #Band
                                #Seni Tari
                                #Tartil
                                #English Club
                                #PKS',

        ]);
              Schools::create([
            'user_id'       => null,
            'nama_sekolah'  => 'SMA Negeri 1 Cisarua',
            'jenjang'       => 'SMA',
            'tipe'          => 'Negeri',
            'alamat'        => 'Jl. Raya Puncak - Cisarua',
            'kota'          => 'Bogor',
            'provinsi'      => 'Jawa Barat',
            'nomor_pokok'   => '20232375',
            'confirmed'     => true,
            'profil'        => 'Visi
                                #Terwujudnya insan akademis  yang religius, kreatif, apresiatif, kompetitif dalam menghadapi tantangan global.

                                Indikator Visi :
                                #Terwujudnya  insan akademis yang berakhlak mulia  dan mampu menerapkan nilai-nilai agama dalam lingkungan masyarakat
                                #Terciptanya Keadaan kelas dan lingkungan sekolah yang baik dan kondusif  sebagai tempat belajar siswa
                                #Memiliki  prestasi, inovasi, apresiasi, dan profesionalisme
                                #Memiliki kecerdasan intelektual-emosional-spriritual yang mampu bersaing dalam setiap kompetisi dan melanjutkan ke  Perguruan Tinggi.
                                #Memiliki kecakapan vokasional yang memadai untuk memasuki dunia kerja atau mampu survive dalam lingkungan masyarakat
                                #Terwujudnya  sistem informasi managemen yang mudah diakses oleh siswa, orang tua ataupun stakeholders lainnya.

                                Misi
                                #Menerapkan prinsip-prinsip agama yang sesuai dengan keyakinannya.
                                #Menata lingkungan kelas dan sekolah sebagai lingkungan belajar (intelektual, sosial, kultural, psikologis dan fisik)
                                #Meningkatkan prestasi, inovasi dan profesionalisme warga sekolah
                                #Melaksanakan pendekatan belajar tuntas (mastery learning) dan sistem penilaian yang berkelanjutan.
                                #Melaksanakan pembelajaran kecakapan hidup (life skills) sesuai dengan minat, kebutuhan siswa dan daya dukung sekolah serta  masyarakat
                                #Melengkapi sarana informasi dan komunikasi serta Pengolahan data  sebagai bahan pertanggungjawaban (akuntabilitas) terhadap stakeholders.

                                Tujuan
                                #Menghasilkan siswa yang cerdas, kreatif dan kompetitif baik di tingkat nasional maupun internasional.
                                ',
            'fasilitas'     => '#Kelas
                                #Laboratorium
                                #Perpustakaan
                                #Keterampilan
                                #Kesenian
                                #Olah raga
                                #OSIS
                                #Ibadah
                                #Koperasi/Kantin
                                #UKS
                                #BK
                                #Guru
                                #Tata Usaha
                                #Gudang
                                #WC
                                #Lapangan Upacara
                                #Kebun Sekolah',
            'prestasi'      => '#Juara III lomba karya tulis ilmiah tk. SMA/MA pekan konfigurasi UIN Sunan Gunung Jati Bandung
                                #Juara I Noryoku shiken bunkasai 7 MGMP Bhs. Jepang
                                #Juara II Lomba Olimpiade Sains Bidang Biologi
                                #Juara II Lomba Olimpiade Sains Bidang Matematika
                                #Juara II Lomba Siswa Teladan Putra se Jabar Komponen SMA
                                #Juara II English Speech Contest Dekan FPBS Dikmaris
                                #Juara I Lomba Penulisan  Karya Tulis Ilmiah LAPAN Peringatan Hari Bumi
                                #Honorable Trophy From President of ESA Senior High School DEBATE COMPETITION AECS ESA UPI Bandung
                                #I st Winner of DEBATE COMPETITION AECS UPI Bandung
                                #III Winner Drama Competition AECS
                                #Juara II Lomba Karya Tulis Ilmiah Tk. SMA Sederajat se Jabar tema : Potensi Ekonomi Daerah Jabaar Himpunan Mahasiswa Ilmu Ekonomi Universitas Islam Bandung
                                #Piala Walikota Bandung  Lomba Nalar Matematika dan Statistika se Jabar LOMASTA XI FMIPA UNISBA
                                #Piala Dekan Lomba Nalar Matematika dan Statistika se Jabar LOMASTA XI FMIPA UNISBA
                                #Piala Ketua Yayasan Lomba Nalar Matematika dan Statistika se Jabar LOMASTA XI FMIPA UNISBA
                                #Juara II Lomba Menulis Puisi Pikiran Rakyat Tk. SMA/SMK
                                #Juara I Lomba Menulis Artikel Tk. SMA/SMK
                                #Juara I Lomba Sains Kimia Tk. SMA UNPAD
                                #Juara III Lomba Olimpiade Sains Biologi Tk. SMA UNPAD
                                #Juara II Nouryoku Shike Pekan Bahasa dan Budaya Jepang ke 9
                                #Juara Har. I Nouryoku Shike Pekan Bahasa dan Budaya Jepang ke 9
                                #Juara Har. I Lomba Cepat Tepat Kimia Tk. SMA/Sederajat Jurusan Kimia FMIPA UNJANI
                                #Juara Har. III Lomba Cepat Tepat Kimia Tk. SMA/Sederajat Jurusan Kimia FMIPA UNJANI
                                #Juara II Lomba Penyuluhan Tentang HIV dan NARKOBA Tk. SMA Se Jabar Dalam Rangka Open House Fak. Kedokterean UNJANI
                                #Juara Har.III  TH7 Economic Contest Fakultas Ekonomi Dan Manajemen IPB Bogor
                                #Juara I Lomba Story Telling antar SMA/SMK Sederajat se-Jawa Barat SPEC II STKIP PASUNDAN CIMAHI 2009
                                #Juara I Olimpiade Ekonomi Berbasis IT antar SMA/MA se-Jawa Barat Ekonomy Fair 2009
                                #Juara II Lomasta XII F MIPA UNISBA Bandung-Oktober 2009 (Piala Tetap Dekan F-MIPA Unisba)
                                #Juara II Lomasta XII F MIPA UNISBA Bandung-Oktober 2009 (Piala Tetap Walikota Bandung)
                                #Juara II Design Character Contest "Nihongo Noryoku Kontesuto" JICEP 2010 HIMABAJA - UPI
                                #Juara UMUM Olimpiade Geografi Tingkat SMA Se-Jabar. DKI Jakarta dan Banten - Fakultas Pendidikan Ilmu Pengetahuan Sosial - UPI
                                #Juara II Sociasl Science Quiz 2010 Fakultas Ekonomi UNJANI
                                #Juara III Senior High School Accounting Competition 2010 Fakultas Ekonomi - UNJANI
                                #Juara III Kompetisi MAFIKIBHIEK Bidang Matematika Tingkat SMA/SMK/MA - UNJANI
                                #Juara III Kompetisi MAFIKIBHIEK Bidang Bahasa Inggris Tingkat SMA/SMK/MA - UNJANI
                                #Juara III The 8th Economics Contest FEM IPB
                                #Juara Olimpiade Kebumian Tingkat Propinsi 2010"Medali Emas"
                                #Juara Olimpiade Kebumian Tingkat Nasional 2010"Medali Emas"
                                #Juara III Lomba Pidato Pasanggiri dan Apresiasi Bahasa,Sastra dan seni Daerah Tk.SMA Se-Jabar
                                #Juara II Lomba Artkel Se-Jabar Banten dalam Gebyar EUREKA X HIMA FISIKA UIN Bandung
                                #Peserta Aktif OSN Tk.Nasional di Manado SULUT
                                #Juara II lomba Debat Gelar Aksi Karakter Siswa Indonesia (Galaksi)Tk.SMA Se-Jawa Barat
                                #Juara I Gelar Aksi Karakter Siswa Indonesia (Galaksi) Tk. SMA Se-Jawa Barat
                                #Duta Muda dan Duta Persahabatan
                                #Juara III SAINS Terpadu TK SLTA Fak.Kedokteran UNJANI
                                #Juara I (Medali Emas) OSN Bidang Ekonomi',
            'biaya'         => '',
            'kegiatan'      => '#PRAMUKA
                                #PASKIBRA
                                #Palang Merah Remaja
                                #Kelompok Ilmiah Remaja
                                #Olah Raga Prestasi
                                #Kesenian
                                #Buletin Sekolah (GENUS)
                                #Tata Boga
                                #Kerohanian
                                #Jurnalistik',

        ]);
              Schools::create([
            'user_id'       => null,
            'nama_sekolah'  => 'SMA Negeri 74 jakarta',
            'jenjang'       => 'SMA',
            'tipe'          => 'Negeri',
            'alamat'        => 'Jl. Dharma Putra XI Kebayoran Lama Selatan',
            'kota'          => 'Kebayoran Lama',
            'provinsi'      => 'Jakarta Selatan',
            'nomor_pokok'   => '20102569',
            'confirmed'     => true,
            'profil'        => 'Visi
                                #Unggul dalam prestasi berdasarkan kultur Imtak, Iptek dan 7K "
                                #Membentuk peserta didik yang beriman bertaqwa, berahlak berbudi luhur, Cinta tanah air dengan menguasai ilmu pengetahuan, memiliki keterampilan, bertanggung jawab, mandiri, kreatif, produktif, sehat jasmani dan rohani

                                Indikator :
                                #Unggulan dalam keimanan
                                #Unggul dalam ketertiban
                                #Unggul dalam Iptek
                                #Unggul dalam kemampuan bahasa Inggris
                                #Unggul dalam perolehan nilai UAN
                                #Unggul dalam persaingan memasuki Perguruan Tinggi Negeri
                                #Unggul dalam hidup bersih dan sehat
                                #Unggul dalam prestasi ekstra kurikuler
                                #Unggul dalam keorganisasian

                                Misi
                                #Menciptakan suasana Sekolah yang Aman, Nyaman dan Menyenangkan.
                                #Membangun suasana kekeluargaan.
                                #Menjadi teladan bagi lingkungan dalam bersikap, berperilaku sebagai masyarakat, pelajar yang cinta damai.
                                #Menegakkan disiplin persuasif edukatif.
                                #Meningkatkan kinerja profesionalisme dengan menggali dan memanfaatkan segenap potensi sumber daya yang ada.
                                #Membina sikap mental dan membangkitkan jiwa kompetitif ingin maju serta kritis terhadap perkembangan ilmu pengetahuan dan teknologi.
                                #Menjadikan sekolah sebagai pusat seni budaya dan olah raga dengan menggali potensi bakat, minat, dan kreativitas melalui kegiatan ekstrakurikuler.
                                #Menumbuhkembangkan jiwa sadar hukum, sikap hormat dan kepatuhan.
                                #Mampu mengaktualisasikan nilai-nilai kebersamaan.',
            'fasilitas'     => '#Memiliki ruang belajar mengajar yang representatif.
                                #Memiliki 1 (satu) ruang Laboratorium Multimedia Pentium 4 = 40 unit
                                #Memiliki 1 (satu) ruang Laboratorium Komputer Core2Duo 44 unit
                                #Memiliki masing-masing 1 (satu) ruang Laboratorium Bahasa, Biologi, Fisika dan Kimia
                                #Mulai bulan Januari 2009 SMA Negeri 74 menyediakan "Internet Hotspot Area"
                                #Seluruh 21 ruang belajar telah terpasang LCD Projector dan seperangkat komputer disetiap kelas
                                #Memiliki 2 (dua) lapangan olah raga
                                #Perpustakaan menyediakan berbagai macam buku untuk mendukung proses belajar-mengajar
                                #Masjid yang cukup luas untuk sarana beribadah
                                #Memiliki Mobil Sekolah',
            'prestasi'      => '#Tari Saman, SMA Yadika 5
                                #Basket Putra di Madrasah UIN
                                #Futsal Putri di GOR Senayan
                                #Lari 100m, POR Pelajar DKI Jakarta
                                #Bola Voli Putra, POR Pelajar DKI Jakarta
                                #Bola Voli Putri, POR Pelajar DKI Jakarta
                                #Tari Saman, Reven Cup 2011 
                                #KIR, Honda Best Student
                                #Bola Voli Putri, UNAS Cup
                                #Marawis, SMA 48 Jakarta
                                #Futsal Putri, SMA 90 Jakarta
                                #Futsal Putri, Piastro 2011
                                #Bola Voli Putri, In Part 51
                                #Futsal Putra, Jakarta Futsal League
                                #KIR IPA, Sudin Jaksel
                                #Futsal Putra, Moestopo Cup
                                #Sepak Takraw Putri, Sudin Jaksel
                                #Lompat Jauh Putri, O2SN
                                #Lompat Tinggi Putri, O2SN
                                #Lari 100m Putra, O2SN
                                #Tenis Meja Putri, O2SN
                                #Pencak Silat Putra, O2SN
                                #Teater, FLS2N
                                #Bola Voli Putra, POR Remaja Jaksel
                                #Paskibra, Kementrian Pemuda dan 
                                #Olahraga
                                #Kostun Paskibra, Kementrian Pemuda dan 
                                #Olahraga
                                #Danton, Kementrian Pemuda dan Olahraga
                                #Catur Cepat Putri, FLS2N
                                #Catur Cepat Putra, FLS2N
                                #Tenis Meja Putra, FLS2N
                                #Tenis Meja Putri, FLS2N
                                #Bulutangkis Putri, FLS2N
                                #Bola Voli Putri, UKM Voli UNAS
                                #KIR IPA, Sudin Jaksel
                                #Tari Saman, SMA 47 Jakarta
                                #Sepak Takraw Putri, Sudin Jaksel
                                #Sepak Takraw Putra, Sudin Jaksel
                                #Cerdas Cermat Agama Islam Tk. SMA, 
                                #Kantor Kementrian Agama
                                #Pidato Pentas PAI Tk. SMA, Kantor 
                                #Kementrian Agama
                                #Futsal Putra, SMA Gonzaga
                                #Speech English, Universitas Mercubuana
                                #Tari Saman, FAI Uhamka
                                #Futsal Putra Tk. SMA,  UIN Syarif 
                                #Hidayatullah, Jakarta',
            'biaya'         => '',
            'kegiatan'      => '',

        ]);
              Schools::create([
            'user_id'       => null,
            'nama_sekolah'  => 'SMA Negeri 78 Jakarta',
            'jenjang'       => 'SMA',
            'tipe'          => 'Negeri',
            'alamat'        => 'JL. BHAKTI IV/1 KOMP. PAJAK',
            'kota'          => 'Jakarta Barat',
            'provinsi'      => 'D.K.I. Jakarta',
            'nomor_pokok'   => '20101588',
            'confirmed'     => true,
            'profil'        => 'Berdiri sejak tahun 1975, semula adalah SMPP-35 menjadi SMA Negeri 78 sejak tahun 1984. Sekolah yang berlokasi di Jl. Bhakti IV/1 Komplek Pajak Kemanggisan ini menjadi sekolah favorit di Jakarta Barat karena sumberdaya dan lokasinya yang strategis. Dengan luas lahan lebih dari 10 ribu meter persegi dan saran laboratorium, olahraga, dan pendukung lainnya yang lengkap menjadi pusatkegiatan guru (PKG) utuk mata pelajaran sains. 
                                Pilihan orangtua dan siswa untuk belajar di SMA Negeri 78 beralasan dengan kondisinya yang sangat kondusif. Sebagai sekolah favorit terbukti dengan prestasinya yang menonjol baik pada bidang akademik maupun non akademik. Untuk pertama kalinya Indoesia mengirimkan utusan pada Olimpiade Fisika Internasional tahun 1993 merupakan wakil dari siswa SMA 78, yaitu Oky Gunawan. Sejak saat itu prestasi sekolah terus bertahan dan dikembangkan pada seluruh elemen sekolah, termasuk guru, dan pegawai. 
                                Pada Tahun 2002, SMA Negeri 78 menerapkan kurikulum berbasis kompetensi (KBK) atas inisiatp sendiri. Dengan pelaksnaaan mandiri KBK di sekolah, pimpinan dan guru berupaya melaksanakan model pebelajaran yang kreatif, aktif, dan memaksimalkan pemberdayaan siswa dalam aktifitas pembelajaran 

                                Visi Sekolah 
                                #Menjadi Sekolah Berprestasi, Berkarakter, Religius, dan Berwawasan Lingkungan 

                                Misi Sekolah 
                                #Melaksanakan Standar Nasional Pendidikan (SNP) yang diperkaya dengan standar internasional (University of Cambridge International Examination).
                                #Melaksanakan program peningkatan kompetensi siswa di bidang akademik dan non akademik yang dapat bersaing di tingkat nasional dan internasional
                                #Melaksanakan program peningkatan kompetensi pendidik dan tenaga kependidikan).
                                #Melaksanakan program kerjasama dan kemitraan dengan intitusi pendidikan, pemerintah, usaha, dan industri
                                #Melaksanakan pengelolaan layanan pendidikan sesuai standar mutu ISO 9001 dan 14001
                                #Melaksanakan pendidikan karakter agar terwujud lulusan yang beriman, bertakwa, dan berakhlak mulia
                                #Melaksanakan program pengembangan sekolah ramah sosial dan ramah lingkungan

                                Kebijakan Mutu 
                                #Berkomitmen untuk melaksanakan penerapan Manajemen Mutu ISO 9001: 2008 secara konsisten
                                #Berusaha memuaskan semua stake holer sekolah dengan meningkatkan mutu layanan pendidikan secara terus menerus
                                #Menghasilkan lulusan yang memiliki kempetensi sesuai bidangnya, berdaya saing global, dan berakhlak mulia

                                Tahapan pencapaian Visi setiap Tahun 
                                #Periode Tahun 2010 - 2011, Menjadi Sekolah Bertaraf Internasional (SBI)
                                #Periode Tahun 2011 - 2012, Menjadi SBI rujukan di DKI Jakarta dan Bodetabek
                                #Periode Tahun 2012 - 2013, Menjadi SBI rujukan di tingkat Nasional
                                #Periode Tahun 2013 - 2014, Mencapai Standar Mutu Internasional yang siap bersaing di tingkat ASEAN##',
            'fasilitas'     => '#30 ruang belajar berbasis ICT dan berAC 
                                #Laboratorium: Fisika, Kimia, Biologi, TIK, Bahasa, Seni, dan IPS 
                                #Perpustakaan digital 
                                #lapangan olah raga:voly, basket, footsal, tenis meja, dan badminton; 
                                #Ruang serbaguna dan multimedia; 
                                #Masjid dan area parkir (motor dan mobil); 
                                #Wifi dan Hotspot seluruh area; 
                                #Greenhouse; dan 
                                #Ruang kegiatan siswa (OSIS, UKS) dan kantin. 
                                ',
            'prestasi'      => '#Sekolah Adiwiyata Tingkat Nasional
                                #Juara 1 Sekolah Adiwiyata
                                #Seleksi Nasional Tim Olimpiade Fisika Indonesia (Ramadiansyah)
                                #Seleksi Nasional Tim Olimpiade Biologi Indonesia (M Farhan Maruli)
                                #Peserta Olimpiade Biologi Internasional di Swiss (M. Farhan Maruli)
                                #Medali Emas OSN Biologi (M. Farhan Maruli)
                                #Medali Perak IBO di Swiss (M. Farhan Maruli)
                                #Juara I Sekolah Adiwiyata
                                #Honorable Mention pada Olimpiade Fisika Internasional di Estonia (Ramadhiansyah)
                                #Juara I Lomba Sekolah Sehat
                                #Juara II Lomba PIK (Pusat Informasi Konseling) Remaja
                                #Tim Pengembang Dit PSMA untuk Pembinaan RSBI (Nursyamsuddin)
                                #The 2nd Runner Up of Story Telling in The 2012 Asien english Olympics (Hazrati Dzatil Ariyati)
                                #Juara I Sekolah Adiwiyata
                                #Medali Emas "Language for the Games" dalam rangka Paralimpiade 2012 di London.( Abdurrahman Adam)
                                #Juara Pertama Cerdas Cermat Konstitusi
                                #Juara Tiga Lomba Sekolah Sehat
                                #Finalis Lomba Cerdas Cermat Konstitusi
                                #Juara I Lomba Himne Dinas Pendidikan DKI (Paduan Suara)',
            'biaya'         => '',
            'kegiatan'      => '',

        ]);
    }
}