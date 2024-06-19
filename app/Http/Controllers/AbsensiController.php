<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use Illuminate\Http\Request;
use App\Models\plotingan_pkl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'status' => 'required|in:hadir,tidak_hadir',
            'keterangan' => 'nullable|required_if:status,tidak_hadir',
        ]);

        // Ambil ID pengguna yang sedang login
        $user = Auth::user();

        // Cari plotingan yang terkait dengan siswa yang berhubungan dengan pengguna yang login
        $plotingan = plotingan_pkl::whereHas('siswa', function($query) use ($user) {
            $query->where('id_user', $user->id);
        })->first();

        if (!$plotingan) {
            // Jika tidak ada data Plotingan, berikan pesan error atau lakukan tindakan lain
            return redirect()->back()->withErrors(['msg' => 'Data plotingan tidak ditemukan untuk siswa yang login.']);
        }

        // Buat entri baru di tabel Absensi dengan menyertakan ID dari relasi
        try {
            $absensi = Absensi::create([
                'status' => $request->status,
                'keterangan' => $request->keterangan,
                'id_plotingan' => $plotingan->id,
                'user_id' => $user->id,
            ]);
            
            // Simpan id_plotingan ke dalam sesi
            Session::put('id_plotingan', $plotingan->id);

        } catch (\Exception $e) {
            // Menangkap dan menampilkan kesalahan
            return redirect()->back()->withErrors(['msg' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage()]);
        }

        // Redirect pengguna ke rute pembuatan jurnal
        return redirect()->route('journal');
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(absensi $absensi)
    {
        return view('journal');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(absensi $absensi)
    {
        //
    }
}
