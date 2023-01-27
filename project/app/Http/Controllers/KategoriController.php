<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = DB::table('kategoris')->get();
        //dd($kategori);
        return view('kategoris.index', ['kategori'=> $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Kategori();
        $data->nama=$request->get('nama');
        $data->deskripsi=$request->get('deskripsi');
        $data->save();
        return redirect()->route('kategori')->with('status', 'Kategori telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        //dd($kategori);
        $data=$kategori;
        //$kategori = Kategori::find($idkategori);
        //$kategori = DB::table('kategoris')->get();
        //return view('kategoris.edit', ['kategori', $kategori]);
        return view('kategoris.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        //$kategori = Kategori::find($idkategori);
        $kategori->nama=$request->get('nama');
        $kategori->deskripsi=$request->get('deskripsi');
        $kategori->save();

        return redirect()->route('kategori')->with('status', 'Data Kategori telah Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($idkategori)
    {
        //dd($idkategori);
        try
        {
            $kategori = Kategori::find($idkategori);
            $kategori->delete();
            //dd($kategori);
            return redirect()->route('hapuskategori')->with('status', 'Data Kategori Berhasil Dihapus');
        }
        catch(\PDOException $e){
            $msg="Data Gagal Dihapus";
            return redirect()->route('kategori')->with('error', $msg);
        }
    }

}
