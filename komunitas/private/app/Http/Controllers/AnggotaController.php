<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota;

class AnggotaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = anggota::all();
        return view('pages.anggota.anggota', compact('anggotas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.anggota.tambah_anggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nomer' => 'unique:anggota'
        ]);
        anggota::create([
            'nama' => request('nama'),
            'jurusan' => request('jurusan'),
            'semester' => request('semester'),
            'status' => request('status'),
            'nomer' => request('nomer')

        ]);

        return redirect()->route('anggota');
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
    public function edit(anggota $anggota)
    {
      
        return view('pages.anggota.edit_anggota', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anggota $anggota)
    {    
        $anggota->update([
            'nama' => request('nama'),
            'jurusan' => request('jurusan'),
            'semester' => request('semester'),
            'status' => request('status'),
            'nomer' => request('nomer'),
        ]);

        return redirect()->route('anggota');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggota');
    }
}
