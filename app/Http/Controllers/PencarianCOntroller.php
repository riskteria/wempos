<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articles as Articles;
use App\Schools as Schools;
use App\Events as Events;
use Input;

class PencarianCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data       = array();

        $search     = $request->input('search');

        $schools    = Schools::where('nama_sekolah','like','%'.$search.'%')->get();
        $articles   = Articles::where('title','like','%'.$search.'%')->where('category','news')->get();
        $activities = Articles::where('title','like','%'.$search.'%')->where('category','activity')->get();
        $events     = Events::where('title','like','%'.$search.'%')->get();

        $total      = $schools->count() + $articles->count() + $activities->count() + $events->count();

        $data       = array(
                        'schools'    => $schools,
                        'articles'   => $articles,
                        'activities' => $activities,
                        'events'     => $events,
                        'search'     => $search,
                        'total'      => $total,
            );

        return view('pages.pencarian', $data);
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
        //
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
