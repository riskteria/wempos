<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use App\Articles as Articles;
use App\Schools as Schools;
use App\Events as Events;
use App\User as Users;


class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $user = Auth::user();
        $articles = Articles::all()->where('user_id',$user->id);

        $data       = array(
                    'articles'   => $articles,
            );
        return view('sekolah.home', $data);
    }

    public function menu($menu)
    {   
        $user = Auth::user();
    }

    public function parameter($parameter, Request $request = null, $id = null)
    {
        if($parameter == 'Information')
        {
            return $this->information();
        }

        elseif($parameter == 'simpaninfo')
        {
            return $this->simpaninfo($request);
        }

        elseif($parameter == 'post')
        {
            return view('sekolah.post');
        }

        elseif($parameter == 'simpanpost')
        {
            return $this->simpanpost($request);
        }

        elseif($parameter == 'deletepost')
        {
            return $this->deletepost($id);
        }
    }

    public function deletepost($id)
    {
        Articles::where('id',$id)->delete();
        $upload_folder = '/img/article/';
        unlink(public_path().$upload_folder.$id.'.jpg');

        return redirect('dashboard/sekolah');
    }

    public function simpaninfo($request)
    {
        $user = Auth::user();
        $nama       = $request->input('nama_sekolah');
        $jenjang    = $request->input('jenjang');
        $tipe       = $request->input('tipe');
        $alamat     = $request->input('alamat');
        $kota       = $request->input('kota');
        $provinsi   = $request->input('provinsi');
        $profil     = $request->input('profil');
        $fasilitas  = $request->input('fasilitas');
        $prestasi   = $request->input('prestasi');
        $biaya      = $request->input('biaya');
        $kegiatan   = $request->input('kegiatan');

        Schools::where('user_id', $user->id)->update([
                'nama_sekolah' => $nama,
                'jenjang'   => $jenjang,
                'tipe'      => $tipe,
                'alamat'    => $alamat,
                'kota'      => $kota,
                'provinsi'  => $provinsi,
                'profil'    => $profil,
                'fasilitas' => $fasilitas,
                'prestasi'  => $prestasi,
                'biaya'     => $biaya,
                'kegiatan'  => $kegiatan,
                'updated_at'    => date('Y-m-d h:i:sa'),
            ]);


        return $this->information();
    }

    public function simpanpost($request)
    {
        $user   = Auth::user()->id;
        $judul  = $request->input('judul');
        $isi    = $request->input('isi');
        $gambar = $request->file('gambar');

        Articles::insert([
            'created_at'    => date('Y-m-d h:i:sa'),
            'updated_at'    => date('Y-m-d h:i:sa'),
            'user_id'       => $user,
            'title'         => $judul,
            'category'      => 'activity',
            'slug'          => str_replace(' ', '-', $judul),
            'intro'         => substr($isi, 0, 300),
            'content'       => $isi,
            ]);

        $filename = Articles::where('slug', str_replace(' ', '-', $judul))->first()->id;
        $upload_folder = '/img/article/';
        $gambar->move(public_path().$upload_folder, $filename.'.jpg');

        return redirect('dashboard/sekolah');
    }

    public function information()
    {
        $user = Auth::user();
        $sekolah = Schools::where('user_id',$user->id)->first();

        $data       = array(
                    'sekolah'   => $sekolah,
            );
        return view('sekolah.information', $data);
    }

}
