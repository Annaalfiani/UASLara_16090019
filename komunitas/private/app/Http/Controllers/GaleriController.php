<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use Storage;
class GaleriController extends Controller
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
        $galeris = galeri::all();

        return view('pages.galeri.galeri', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.galeri.tambah_galeri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
       $upload = $request->file('upload')->store('galeri');
       galeri::create([
        'judul' => request('judul'),
        'upload' => $upload,
        'deskripsi' => request('deskripsi')

    ]);

    return redirect()->route('galeri');
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
    public function edit(galeri $galeri)
    {
        return view('pages.galeri.edit_galeri', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galeri $galeri)
    {
        //dd($request->all());

        request()->validate([
            'judul' =>'min:5|max:50',
            'upload' => 'image|mimes:jpeg,jpg,png',
            'deskripsi' => 'min:10'
        ]);

        if($request->upload){
            $upload = $request->file('upload')->store('galeri');
            $upload_path = $galeri->upload;
            if(Storage::exists($upload_path)){
                Storage::delete($upload_path);
            }
       $galeri->update([
                'judul' => request('judul'),
                'upload' => $upload,
                'deskripsi' => request('deskripsi')
        
            ]);
        
        }else{
             $galeri->update([
            'judul' => request('judul'),
            'deskripsi' => request('deskripsi'),
        ]);
        }
       
        return redirect()->route('galeri')->with('success','Galeri berhasil diubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(galeri $galeri)
    {
        $upload_path = $galeri->upload;
        if(Storage::exists($upload_path)){
            Storage::delete($upload_path);
        }
        $galeri->delete();

        return redirect()->route ('galeri');
    }
}
