<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function create(Request $request)
    {
		\App\Models\Event::create([
                'nama'=> $request->nama,
                'tanggal'=> $request->tanggal,
                'informasi'=> $request->informasi,
		]);
        return redirect('/dashboard')->with('sukses','event berhasil ditambahkan!');
    }
    public function show()
    {
        $event = \App\Models\Event::table('event')->get();
        return view('dashboard', compact('event'));
    }
    public function crud()
    {   
        $event= \App\Models\Event::all();
        return view('dashboard',['event'=>$event]);
    }
    public function home()
    {   
        $event= \App\Models\Event::all();
        return view('welcome',['event'=>$event]);
    }
    public function edit($id)
    {
        $event= \App\Models\Event::find($id);
        return view('edit_event',['event' => $event]);
    }
    public function update($id, Request $request)
    {
        $request->validate([
                'id' => 'required',
                'nama'=> 'required',
                'tanggal'=>'required',
                'informasi'=> 'required',
        ]);

        $query = DB::table('event')
            ->where('id', $id)
            ->update([
                'id' => $request->id,
                'nama'=> $request->nama,
                'tanggal'=> $request->tanggal,
                'informasi'=> $request->informasi,
            ]);
        return redirect('/dashboard');
    }
    public function delete($id){
        $SPPD= \App\Models\Event::find($id);
        $SPPD->delete();
        return redirect('/dashboard')->with('Terhapus','event berhasil dihapus!');;
    }
}
