<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_induk_siswa' => 'required|string',
            'jenkel' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string',
            'kelas' => 'required|string',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'no_telp' => 'required|string|max:20',
            'nama_orangTua' => 'required|string|max:255',
            'nama_industri' => 'required|string',
            'alamat_industri' => 'required|string',
            'nama_negara' => 'required|string',
        ]);

        $validateData['id_user'] = Auth::id();

        siswa::create($validateData);

        return redirect()->route('home')->with('success', 'Siswa has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        //
    }
}
