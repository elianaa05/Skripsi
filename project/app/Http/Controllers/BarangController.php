<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = DB::table('barangs')
                    ->join('kategoris', 'kategoris.idkategori', '=', 'barangs.idkategori')
                    ->select('barangs.*', 'kategoris.nama')
                    ->get();
        //dd($barangs);
        return view('barangs.index', ['barangs' => $barangs]);
        //return view('barangs.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = DB::table('kategoris')->get();
        //dd($kategoris);
        //return view('barangs.create', compact('kategori'));
        return view('barangs.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Barang();
        //$kat = new Kategori();

        $data->nama_barang = $request->get('nama_barang');

        $file=$request->file('gambar');
        $imgFolder='img';
        $imgFile= $file->getClientOriginalName();
        $file->move($imgFolder, $imgFile);
        $data->gambar = $imgFile;

        $data->idkategori = $request->get('idkategori');

        $data->save();
        return redirect()->route('barangs')->with('status', 'Barang is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
    }

    public function frontendindex(){
        $baranguser = DB::table('barangs')->get();
        return view('frontend.shop', ['baranguser' => $baranguser]);
    }


}
