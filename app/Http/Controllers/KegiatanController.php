<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatans;
use Illuminate\Paginate;
use Illuminate\Support\Facades\Redirect;

class KegiatanController extends Controller
{

    public function index () {
        $kegiatan = Kegiatans::paginate(5);
        return view('kegiatan.index',compact('kegiatan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'deskripsi' => 'required',
        ]);
  
        Kegiatans::create($request->all());
        return redirect()->route('kegiatan.index')->with('success','Kegiatan Behasil di tambahkan.');
    }

    public function show(kegiatans $kegiatan)
    {
        return view('kegiatan.show',compact('kegiatan'));
    }

    public function edit(kegiatans $kegiatan)
    {
        return view('kegiatan.edit',compact('kegiatan'));
    }

    public function update(Request $request, kegiatans $kegiatan)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'deskripsi' => 'required',
        ]);
  
        $kegiatan->update($kegiatan->all());
  
        return redirect()->route('kegiatan.index')->with('success','Kegiatan berhasil di ubah');
    }

    public function destroy(kegiatans $kegiatan)
    {
        $kegiatan->delete();
  
        return redirect()->route('kegiatan.index')->with('success','Kegiatan berhasil di hapus');
    }
}
