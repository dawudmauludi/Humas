<?php

namespace App\Http\Controllers;

use App\Models\dudi;
use App\Models\ketersediaan;
use App\Models\pembimbing;
use App\Models\plotingan_pkl;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPlotinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.plotingan.index',[
            'plotingan' => plotingan_pkl::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.plotingan.create',[
            'ketersediaans' => ketersediaan::with('dudi')->get(),
            'siswa' => siswa::all(),
            'pembimbing' => pembimbing::all()
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
        $data = $request->validate([
            'id_ketersediaan' => 'required|exists:ketersediaans,id',
            'id_siswa' => 'required|exists:siswas,id',
            'id_pembimbing' => 'required',
        ]);

        DB::beginTransaction();

        try {
            plotingan_pkl::create($data);

            $ketersediaan = Ketersediaan::find($data['id_ketersediaan']);
            // Update ketersediaan
            $ketersediaan->increment('jumlah_siswa');
            $ketersediaan->decrement('sisa_kuota');
            $ketersediaan->save();

            DB::commit();

            return redirect()->route('plotingan.index')->with('success', 'Plotingan berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan plotingan: ' . $e->getMessage());
        }
    
    
    
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
