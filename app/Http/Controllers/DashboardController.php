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

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user   = Auth::user();
        $data   = array();

        if($user->role == 'admin')
        {
            $data = $this->admincount();
        }

        elseif($user->role == 'sekolah')
        {
            $data = $this->admincount();
        }

        return view($user->role.'.home', $data);
    }

    public function adminview($count, Request $request)
    {
        $data   = array();

        if($count == 'articles')
        {

            $articles = Articles::all();
            $data       = array(
                        'articles'   => $articles,
                );

            return view('admin.viewarticles', $data);
        }

        elseif($count == 'activities')
        {

            $activities = Articles::all();
            $data       = array(
                        'activities'   => $activities,
                );

            return view('admin.viewactivities', $data);
        }

        elseif($count == 'events')
        {

            $events = Events::all();
            $data       = array(
                        'events'   => $events,
                );

            return view('admin.viewevents', $data);
        }

        elseif($count == 'users')
        {

            $users = Users::all();
            $data       = array(
                        'users'   => $users,
                );

            return view('admin.viewusers', $data);
        }

        elseif($count == 'post')
        {
            return view('admin.post');
        }

        elseif($count == 'simpanpost')
        {
            return $this->simpanpost($request);
        }

        
    }

    public function admincount()
    {
        $articles   = Articles::where('category','news')->count();
        $activities = Articles::where('category','activity')->count();
        $events     = Events::all()->count();
        $users      = Users::all()->count();

        $data       = array(
                    'articles'   => $articles,
                    'activities' => $activities,
                    'events'     => $events,
                    'users'      => $users,
            );
        return $data;

    }

    public function simpanpost($request)
    {
        $user   = Auth::user()->id;
        $judul  = $request->input('judul');
        $isi    = $request->input('isi');
        $gambar = $request->input('gambar');

        Articles::insert([
            'created_at'    => date('Y-m-d h:i:sa'),
            'updated_at'    => date('Y-m-d h:i:sa'),
            'user_id'       => $user,
            'title'         => $judul,
            'category'      => 'news',
            'slug'          => str_replace(' ', '-', $judul),
            'intro'         => substr($isi, 0, 100),
            'content'       => $isi,
            ]);

        return redirect('dashboard/admin/articles');
    }

    public function postview()
    {
        return view('admin.post');
    }

    public function delete($tipe, $id)
    {
        if($tipe == 'event')
        {
            Events::where('id',$id)->delete();
            return $this->adminview('events');
        }
        
        elseif($tipe == 'article')
        {
            Articles::where('id',$id)->delete();
            return $this->adminview('articles');
        }
        
        elseif($tipe == 'user')
        {
            Users::where('id',$id)->delete();
            return $this->adminview('users');
        }
        
        elseif($tipe == 'activity')
        {
            Articles::where('id',$id)->delete();
            return $this->adminview('activities');
        }
    }
}
