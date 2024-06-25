<?php

namespace App\Http\Controllers;

use App\Models\journal;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class journalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'tanggal' => 'required|date',
            'jam_datang' => 'required',
            'jam_pulang' => 'required',
            'uraian_kegiatan' => 'required|string',
            'foto_kegiatan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'catatan' => 'nullable'
        ]);

        // Simpan file foto
        if ($request->hasFile('foto_kegiatan')) {
            $imagePath = $request->file('foto_kegiatan')->store('public/image');
            $validasi['foto_kegiatan'] = $imagePath;
        } else {
            return redirect()->back()->withErrors(['msg' => 'Gambar tidak ditemukan atau gagal diunggah.']);
        }

        // Ambil id_plotingan dari sesi
        $id_plotingan = Session::get('id_plotingan');

        if (!$id_plotingan) {
            return redirect()->back()->withErrors(['msg' => 'ID Plotingan tidak ditemukan dalam sesi.']);
        }

        // Simpan data jurnal
        try {
            Journal::create([
                'tanggal' => $request->tanggal,
                'jam_datang' => $request->jam_datang,
                'jam_pulang' => $request->jam_pulang,
                'uraian_kegiatan' => $request->uraian_kegiatan,
                'foto_kegiatan' => $imagePath,
                'catatan' => $request->catatan,
                'id_plotingan' => $id_plotingan
            ]);
        } catch (\Exception $e) {
            // Menangkap dan menampilkan kesalahan
            return redirect()->back()->withErrors(['msg' => 'Terjadi kesalahan saat menyimpan data jurnal: ' . $e->getMessage()]);
        }

        // Redirect ke halaman home setelah menyimpan jurnal
        return redirect()->route('home')->with('success', 'Journal entry created successfully.');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
