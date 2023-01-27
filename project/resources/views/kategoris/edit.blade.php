@extends('layouts.layouts')

@section('title')
    Edit Kategori
@endsection

@section('content')
<div class = "col-xl">
  <!-- <div class="card mb-4"> -->
    <div class="card-body">
      <form action="{{url('kategori/'.$data->idkategori)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="nama">Nama Kategori</label>
          <input type="nama" class="form-control" id="nama" name="nama" value="{{$data->nama}}">
        </div>
        <div class="mb-3">
          <label for="deskripsi">Deskripsi</label>
          <input type="textarea" class="form-control" id="deskripsi" name="deskripsi" value="{{$data->deskripsi}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  <!-- </div> -->
</div>
@endsection