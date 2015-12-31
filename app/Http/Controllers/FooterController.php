<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tentang()
    {
        return view('pages.tentang');
    }

    public function kebijakan()
    {
        return view('pages.kebijakan');        
    }

    public function syarat()
    {
        return view('pages.syarat');        
    }
}
