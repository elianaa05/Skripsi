@extends('layouts.layouts')

@section('title')
    Daftar Barang Jual
@endsection

@section('content')  
<table class="table table-hover text-center">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Deskripsi</th>
        <th>Stok</th>
        <th>Satuan</th>
        <th>Jumlah Terjual</th>
        <th>Harga Barang</th>
        <th>Gambar</th>
        <th>ID User</th>
        <th>ID Barang</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      @foreach($barangjual as $bj)
      <tr>
        <td>{{$bj->id}}</td>
        <td>{{$bj->nama_barangjual}}</td>
        <td>{{$bj->deskripsi}}</td>
        <td>{{$bj->stok}}</td>
        <td>{{$bj->satuan}}</td>
        <td>{{$bj->jumlah_terjual}}</td>
        <td>{{$bj->harga_barang}}</td>
        <td>
            <div>
                <img src="{{asset('img/').'/'.$bj->gambar}}" height ='100px'/>
            </div>
        </td>
        <td>{{$bj->iduser}}</td>
        <td>{{$bj->idbarang}}</td>
        <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);">
                    <i class="bx bx-edit-alt me-1"></i> Edit
                </a>
                <a class="dropdown-item" href="javascript:void(0);">
                    <i class="bx bx-trash me-1"></i> Delete
                </a>
              </div>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection