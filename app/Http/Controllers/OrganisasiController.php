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
            case '/':
                return view('organisasi.home');
                break;

            case 'value':
                
                break;
            
            default:
                return view('errors.404');
                break;
        }
    }
}
