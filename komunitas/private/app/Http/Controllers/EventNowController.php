<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use Storage;

class EventNowController extends Controller
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
        $event = event::all();

        return view('pages.event.event', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.event.tambah_event');

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
            'upload' => 'image|mimes:jpg,jpeg,png',
            'formulir' => 'file|mimes:pdf'
        ]);
       // dd($request->all());
        $upload = $request->file('upload')->store('event');
        $formulir = $request->file('formulir')->store('formulir');

        event::create([
            'nama_event' => request('nama'),
            'upload' => $upload,
            'tanggal' => request('tanggal'),
            'waktu' => request('waktu'),
            'tempat' => request('tempat'),
            'deskripsi' => request('deskripsi'),
            'formulir' => $formulir
        ]);
        return redirect()->route('event');
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
    public function edit($event)
    {
        $event = event::find($event);
        return view('pages.event.edit_event', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
       //dd($request->all());

       request()->validate([
        'nama_event' =>'required',
        'tanggal' => 'required',
        'waktu' => 'required',
        'tempat' => 'required',
        'deskripsi' => 'required',
    ]);

    if ($request->upload){
        $upload = $request->file('upload')->store('event');
        $upload_path = $event->upload;
        if (Storage::exists($upload_path)){
            Storage::delete($upload_path);
        }
   $event->update([
            'nama_event' => request('nama_event'),
            'upload' => $upload,
            'tanggal' => request('tanggal'),
            'waktu' => request('waktu'),
            'tempat' => request('tempat'),
            'deskripsi' => request('deskripsi')
    
        ]);
    
    }else{
         $event->update([
        'nama_event' => request('nama_event'),
        'tanggal' => request('tanggal'),
        'waktu' => request('waktu'),
        'tempat' => request('tempat'),
        'deskripsi' => request('deskripsi'),
    ]);
    }
   
    return redirect()->route('event');
    
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        $upload_path = $event->upload;
        if(Storage::exists($upload_path)){
            Storage::delete($upload_path);
        }
        $event->delete();

        return redirect()->route ('event');
    }
}
