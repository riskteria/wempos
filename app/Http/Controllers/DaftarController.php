<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use App\Schools as Schools;
use App\User as Users;

class DaftarController extends Controller
{
    public function parameter($parameter, Request $request = null, $id = null)
    {
        switch ($parameter) {
            case 'sekolah':
                return view('pendaftaran.sekolah');
                break;

            case 'organisasi':
                return view('pendaftaran.organisasi');
                break;

            case 'pribadi':
                return view('pendaftaran.pribadi');
                break;

            case 'simpansekolah':
                return $this->simpansekolah($request);
                break;

            case 'simpanorganisasi':
                return $this->simpanorganisasi($request);
                break;

            case 'simpanpribadi':
                return $this->simpanpribadi($request);
                break;
            
            default:
                # code...
                break;
        }
    }

    public function simpanorganisasi($request)
    {
        $nama       = $request->input('nama');
        $username   = $request->input('username'); 
        $email      = $request->input('email');
        $password   = $request->input('password');
        $gambar     = $request->file('gambar');

        Users::insert([
                'username'          => $username,
                'display_name'      => $nama,
                'email'             => $email,
                'password'          => bcrypt($password),
                'role'              => 'organisasi',
                'confirmed'         => true,
                'confirmation_code' => md5(microtime() . env('APP_KEY')), 
            ]);

        $id = Users::where('username', $username)->first()->id;

        if($gambar !== null)
        {
            $filename = $id;
            $upload_folder = '/img/organisasi/';
            $gambar->move(public_path().$upload_folder, $filename.'.jpg');
        }

        return redirect('auth/login');
    }

    public function simpansekolah($request)
    {
        $nama        = $request->input('nama');
        $jenjang     = $request->input('jenjang');
        $alamat      = $request->input('alamat');
        $kota        = $request->input('kota');
        $provinsi    = $request->input('provinsi');
        $nomor_pokok = $request->input('nomor_pokok');
        $username    = $request->input('username');
        $email       = $request->input('email');
        $password    = $request->input('password');
        $gambar      = $request->file('gambar');

        Users::insert([
                'username'          => $username,
                'display_name'      => $nama,
                'email'             => $email,
                'password'          => bcrypt($password),
                'role'              => 'sekolah',
                'confirmed'         => true,
                'confirmation_code' => md5(microtime() . env('APP_KEY')), 
            ]);

        $id = Users::where('username', $username)->first()->id;

        Schools::insert([
                'user_id'       => $id,
                'nama_sekolah'  => $nama,
                'jenjang'       => $jenjang,
                'alamat'        => $alamat,
                'kota'          => $kota,
                'provinsi'      => $provinsi,
                'nomor_pokok'   => $nomor_pokok,
                'created_at'    => date('Y-m-d h:i:sa'),
                'updated_at'    => date('Y-m-d h:i:sa'),
            ]);

        if($gambar !== null)
        {
            $filename = $id;
            $upload_folder = '/img/sekolah/';
            $gambar->move(public_path().$upload_folder, $filename.'.jpg');
        }

        return redirect('auth/login');
    }
}
