<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Anggota;
use App\Event;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function userhome(){
        $galeris = Galeri::orderBy('id','DESC')->paginate(6);
        $events = Event::orderBy('id','DESC')->paginate(3);

        return view('pages-user.home', compact('galeris','events'));
    }
}
