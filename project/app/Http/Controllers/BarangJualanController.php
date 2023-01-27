<?php

namespace App\Http\Controllers;

use App\Models\BarangJualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangJualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangjual = DB::table('detail_barangjual')
                    ->join('users', 'users.iduser','=', 'detail_barangjual.iduser')
                    ->join('barangs','barangs.idbarang', '=', 'detail_barangjual.idbarang')
                    ->select('detail_barangjual.*', 'barangs.gambar')
                    ->get();
        //dd($barangjual);
        return view('barangjuals.index', ['barangjual'=>$barangjual]);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangJualan  $barangJualan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangjual = BarangJualan::find($id);
        $katbarang = DB::table('barangs')
                    ->join('detail_barangjual', 'detail_barangjual.idbarang', '=', 'barangs.idbarang')
                    ->join('kategoris', 'kategoris.idkategori', '=', 'barangs.idkategori')
                    ->select('barangs.*', 'kategoris.nama')
                    ->where('id' , $barangjual ->id)
                    ->get();
        //dd($katbarang);
        return view('frontend.detailbarang', compact('barangjual', 'katbarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangJualan  $barangJualan
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangJualan $barangJualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangJualan  $barangJualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangJualan $barangJualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangJualan  $barangJualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangJualan $barangJualan)
    {
        //
    }

    public function indexbarangjual()
    {
        $barangjuals = DB::table('detail_barangjual')
                    ->join('users', 'users.iduser','=', 'detail_barangjual.iduser')
                    ->join('barangs','barangs.idbarang', '=', 'detail_barangjual.idbarang')
                    ->join('kategoris', 'barangs.idkategori', '=', 'kategoris.idkategori')
                    ->select('detail_barangjual.*', 'barangs.gambar', 'kategoris.nama')
                    ->get();
        //dd($barangjuals);
        return view('frontend.shop', ['barangjuals'=>$barangjuals]);

    }


    public function bookingbarangjual()
    {
        $barangjuals = DB::table('detail_barangjual')
                    ->join('users', 'users.iduser','=', 'detail_barangjual.iduser')
                    ->join('barangs','barangs.idbarang', '=', 'detail_barangjual.idbarang')
                    ->join('kategoris', 'barangs.idkategori', '=', 'kategoris.idkategori')
                    ->select('detail_barangjual.*', 'barangs.gambar', 'kategoris.nama')
                    ->get();
        //dd($barangjuals);
        return view('frontend.booking', ['barangjuals'=>$barangjuals]);
    }
}
