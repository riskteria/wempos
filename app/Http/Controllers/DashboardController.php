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

    public function adminview($count, Request $request = null, $id = null)
    {
        $data   = array();

        if($count == 'articles')
        {

            $articles = Articles::all()->where('category', 'news');
            $data       = array(
                        'articles'   => $articles,
                );

            return view('admin.viewarticles', $data);
        }

        elseif($count == 'activities')
        {

            $activities = Articles::all()->where('category', 'activity');
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

        elseif($count == 'editpost')
        {
            $post = Articles::where('id', $id)->first();
            $data = array(
                    'post'  => $post,
                );
            return view('admin.editpost', $data);
        }

        elseif($count == 'simpanedit')
        {
            return $this->simpanedit($request, $id);
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
        $gambar = $request->file('gambar');

        Articles::insert([
            'created_at'    => date('Y-m-d h:i:sa'),
            'updated_at'    => date('Y-m-d h:i:sa'),
            'user_id'       => $user,
            'title'         => $judul,
            'category'      => 'news',
            'slug'          => str_replace(' ', '-', $judul),
            'intro'         => substr($isi, 0, 300),
            'content'       => $isi,
            ]);

        $filename = Articles::where('slug', str_replace(' ', '-', $judul))->first()->id;
        $upload_folder = '/img/article/';
        $gambar->move(public_path().$upload_folder, $filename.'.jpg');

        return redirect('dashboard/admin/articles');
    }

    public function simpanedit($request, $id)
    {
        $user   = Auth::user()->id;   
        $judul  = $request->input('judul');
        $isi    = $request->input('isi');
        $gambar = $request->file('gambar');
        
        Articles::where('id', $id)->update([
                'title'      => $judul,
                'content'    => $isi,
                'updated_at' => date('Y-m-d h:i:sa'),
                'slug'       => str_replace(' ', '-', $judul),
                'intro'      => substr($isi, 0, 300),
            ]); 

        if($gambar !== null)
        {
            $filename = $id;
            $upload_folder = '/img/article/';
            $gambar->move(public_path().$upload_folder, $filename.'.jpg');
        }

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
            return redirect('dashboard/admin/events');
        }
        
        elseif($tipe == 'article')
        {
            Articles::where('id',$id)->delete();
            $upload_folder = '/img/article/';
            unlink(public_path().$upload_folder.$id.'.jpg');
            return redirect('dashboard/admin/articles');
        }
        
        elseif($tipe == 'user')
        {
            $role = Users::where('id',$id);
            Users::where('id',$id)->delete();

            if($role-role == 'sekolah')
            {
                Schools::where('user_id', $role->id)->delete();
            }
            
            return redirect('dashboard/admin/users');
        }
        
        elseif($tipe == 'activity')
        {
            Articles::where('id',$id)->delete();
            return redirect('dashboard/admin/activities');
        }
    }
}
