@extends('layouts.layouts')

@section('title')
    Daftar Barang
@endsection

@section('tambah')
<a href="{{route('tambahbarang')}}"><button type="button" style="margin-right : 400px" class="btn rounded-pill btn-primary mb-3">
    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah
</button></a>
@endsection


@section('content')  
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Gambar</th>
        <th>ID Kategori</th>
        <th>Nama Kategori</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      @foreach($barangs as $brg)
      <tr>
        <td>{{$brg->idbarang}}</td>
        <td>{{$brg->nama_barang}}</td>
        <td>
            <div>
                <img src="{{asset('assets/img/').'/'.$brg->gambar}}" height ='100px'/>
            </div>
        </td>
        <td>{{$brg->idkategori}}</td>
        <td>{{$brg->nama}}</td>
        <td>
            <div>
              <button type="button" class="btn btn-icon btn-secondary">
                <span class="tf-icons bx bx-edit-alt"></span>
              </button>
              <button type="button" class="btn btn-icon btn-danger">
                <span class="tf-icons bx bx-trash"></span>
              </button>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection