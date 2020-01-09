<?php

namespace App\Http\Controllers;

use Illuminate\Http\requestest;
use DB;
use App\DataMobil;
use PDF;

class DataMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_mobil = DB::table('data_mobil')->get();

        return view('data_mobil/index', compact('ar_mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_mobil/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table pegawai
    DB::table('data_mobil')->insert([
        'nama' => $request->nama,
        'plat' => $request->plat,
        'tahun' => $request->tahun,
        'harga_half' => $request->harga_half,
        'harga_full' => $request->harga_full,
        'status' => $request->status,
        'foto' => $request->foto
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('data_mobil/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $ar_mobil = DB::table('data_mobil')
         ->where('data_mobil.id','=',$id)
         ->get();

        return view('data_mobil/show', compact('ar_mobil'));
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
    public function exportpdf()
    {
        $pegawai = \App\DataMobil::all();
        $pdf = PDF::loadView('export.pegawaipdf', ['data_mobil' => $pegawai]);
        return $pdf->download('pegawai.pdf');
    }
}
