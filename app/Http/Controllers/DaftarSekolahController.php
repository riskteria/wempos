<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Schools as Schools;

class DaftarSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($jenjang)
    {

        if($jenjang == 'sd')
        {
            $sd  = Schools::all()->where('jenjang', 'SD');
            $min = Schools::all()->where('jenjang', 'MIN');
            $data    = array(
                        'tipe1' => $sd,
                        'tipe2' => $min
                );
        }

        elseif($jenjang == 'smp'){
            $smp = Schools::all()->where('jenjang', 'SMP');
            $mts = Schools::all()->where('jenjang', 'MTS');
            $data    = array(
                        'tipe1' => $smp,
                        'tipe2' => $mts
                );
        }

        elseif($jenjang == 'sma'){
            $sma = Schools::all()->where('jenjang', 'SMA');
            $smk = Schools::all()->where('jenjang', 'SMK');
            $data    = array(
                        'tipe1' => $sma,
                        'tipe2' => $smk
                );
        }

        else
            return view('errors.404');

        return view('pages.sekolah', $data);
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
