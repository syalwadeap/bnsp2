<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Peserta;
use App\Models\Event;
class PesertaController extends Controller
{
    public function index()
    {
        return view('peserta');
    }
    public function create(Request $request)
    {
		\App\Models\Peserta::create([
                'id_event'=> $request->id_event,
                'nama'=> $request->nama,
                'email'=> $request->email,
                'tanggal_lahir'=> $request->tanggal_lahir,
                'alamat'=> $request->alamat,
		]);
        return redirect('/')->with('sukses','Peserta berhasil ditambahkan!');
    }
    public function show()
    {
        $SPPD = \App\Models\Peserta::table('peserta')->get();
        return view('peserta', compact('peserta'));
    }
    public function crud($id)
    {   
        $peserta= \App\Models\Peserta::where('id_event', $id)->get();
        return view('daftar_peserta',['peserta'=>$peserta]);
    }
    public function daftar($id)
    {   
        $event= \App\Models\Event::find($id);
        return view('add_peserta',['event' => $event]);
    }
}
