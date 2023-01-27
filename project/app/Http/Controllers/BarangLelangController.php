<?php

namespace App\Http\Controllers;

use App\Models\BarangLelang;
use Illuminate\Http\Request;

class BarangLelangController extends Controller
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
     * @param  \App\Models\BarangLelang  $barangLelang
     * @return \Illuminate\Http\Response
     */
    public function show(BarangLelang $barangLelang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangLelang  $barangLelang
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangLelang $barangLelang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangLelang  $barangLelang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangLelang $barangLelang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangLelang  $barangLelang
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangLelang $barangLelang)
    {
        //
    }

    public function indexbaranglelang()
    {
        $baranglelangs = DB::table('barang_lelangs')->get();
        return view('frontend.lelang', ['baranglelangs'=>$baranglelangs]);
    }
}
