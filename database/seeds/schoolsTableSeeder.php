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
        	'user_id'		=> 2,
        	'nama_sekolah'	=> 'SMK Telkom Sandy Putra Medan',
        	'jenjang'		=> 'SMK',
        	'tipe'			=> 'Swasta',
        	'alamat'		=> 'Jl. Halat No. 68',
        	'kota'			=> 'Medan',
        	'provinsi'		=> 'Sumatera Utara',
        	'nomor_pokok'	=> '01.422.033.9.113.001',
            'confirmed'     => true,
            'profil'        => '',
            'fasilitas'     => '',
            'prestasi'      => '',
            'biaya'         => '',
            'kegiatan'      => '',

        ]);

        Schools::create([
            'user_id'       => null,
            'nama_sekolah'  => '',
            'jenjang'       => '',
            'tipe'          => '',
            'alamat'        => '',
            'kota'          => '',
            'provinsi'      => '',
            'nomor_pokok'   => '',
            'confirmed'     => true,
            'profil'        => '',
            'fasilitas'     => '',
            'prestasi'      => '',
            'biaya'         => '',
            'kegiatan'      => '',

        ]);
    }
}
