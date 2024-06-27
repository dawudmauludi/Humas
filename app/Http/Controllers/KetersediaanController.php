<?php

namespace App\Http\Controllers;

use App\Models\dudi;
use App\Models\jurusan;
use App\Models\ketersediaan;
use Illuminate\Http\Request;

class KetersediaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.ketersediaan.index',[
        'ketersediaans' => ketersediaan::with('dudi')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ketersediaan.create',[
            'dudis' => dudi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_dudi' => 'required|exists:dudis,id',
            'jurusan' => 'required|string|max:255',
            'kuota' => 'required|integer|min:1'
        ]);
    
        // Cari atau buat ketersediaan baru
        $ketersediaan = Ketersediaan::create([
            'id_dudi' => $request->id_dudi,
            'jurusan' => $request->jurusan,
            'kuota' => $request->kuota,
            'sisa_kuota' => $request->kuota
        ]);
    
        

        return redirect()->route('ketersediaan.index')->with('success', 'Ketersediaan berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ketersediaan  $ketersediaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ketersediaan = Ketersediaan::with('plotinganPkl.siswa')->findOrFail($id);
        
        return view('dashboard.ketersediaan.show', compact('ketersediaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ketersediaan  $ketersediaan
     * @return \Illuminate\Http\Response
     */
    public function edit(ketersediaan $ketersediaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ketersediaan  $ketersediaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ketersediaan $ketersediaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ketersediaan  $ketersediaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ketersediaan $ketersediaan)
    {
        //
    }
}
