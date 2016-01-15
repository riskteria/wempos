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

class OrganisasiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $events = Events::all()->where('user_id',$user->id);

        $data       = array(
                    'events'   => $events,
            );

        return view('organisasi.home', $data);
    }

    public function parameter($parameter, Request $request = null, $id = null)
    {
        switch ($parameter) {
            case 'post':
                return view('organisasi.post');
                break;

            case 'deleteevent':
                return $this->deleteevent($id);
                break;
            
            case 'simpanpost':
                return $this->simpanpost($request);
                break;

            case 'Information':
                $data = array(
                        'user'  => Auth::user(),
                    );
                return view('organisasi.Information', $data);
                break;

            case 'editevent':
                $event = Events::where('id', $id)->first();
                $data = array(
                        'event'  => $event,
                    );
                return view('organisasi.editevent', $data);
                break;

            case 'simpanedit':
                return $this->simpanedit($request, $id);
                break;

            default:
                return view('errors.404');
                break;
        }
    }

    public function simpanedit($request, $id)
    {
        $judul    = $request->input('judul');
        $tanggal  = $request->input('tanggal');
        $bulan    = $request->input('bulan');
        $tahun    = $request->input('tahun');
        $lokasi   = $request->input('lokasi');
        $isi      = $request->input('isi');
        $gambar   = $request->file('gambar');

        $due_date = date('Y-m-d h:i:sa', mktime(11, 14, 54, $tanggal, $bulan, $tahun));

        Events::where('id', $id)->update([
                'location'      => $lokasi,
                'title'         => $judul,
                'description'   => $isi,
                'due_date'      => $due_date,
                'updated_at'    => date('Y-m-d h:i:sa'),
            ]);

        if($gambar !== null)
        {
            $filename = $id;
            $upload_folder = '/img/event/';
            $gambar->move(public_path().$upload_folder, $filename.'.jpg');
        }

        return redirect('dashboard/organisasi');
    }

    public function simpanpost($request)
    {
        $user = Auth::user()->id;
        $judul    = $request->input('judul');
        $tanggal  = $request->input('tanggal');
        $bulan    = $request->input('bulan');
        $tahun    = $request->input('tahun');
        $lokasi   = $request->input('lokasi');
        $isi      = $request->input('isi');
        $gambar   = $request->file('gambar');

        $due_date = date('Y-m-d h:i:sa', mktime(11, 14, 54, $tanggal, $bulan, $tahun));

        Events::insert([
                'user_id'       => $user,
                'location'      => $lokasi,
                'title'         => $judul,
                'description'   => $isi,
                'created_at'    => date('Y-m-d h:i:sa'),
                'due_date'      => $due_date,
                'updated_at'    => date('Y-m-d h:i:sa'),
            ]);

        $filename = Events::where('title', $judul)->first()->id;
        $upload_folder = '/img/event/';
        $gambar->move(public_path().$upload_folder, $filename.'.jpg');

        return redirect('dashboard/organisasi');
    }

    public function deleteevent($id)
    {
        Events::where('id', $id)->delete();
        $upload_folder = '/img/event/';
        unlink(public_path().$upload_folder.$id.'.jpg');
        return redirect('dashboard/organisasi');
    }
}
