<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
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
    public function index($role)
    {
        $user   = Auth::user();
        $data   = array();

        if($user->role == 'admin')
        {
            $data = $this->admincount();
        }

        return view($role.'.home', $data);
    }

    public function adminview($count)
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
