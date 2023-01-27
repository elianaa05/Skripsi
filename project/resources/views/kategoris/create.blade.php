@extends('layouts.layouts')

@section('title')
    Form Tambah Kategori
@endsection

@section('content')
<div class = "col-xl">
  <!-- <div class="card mb-4"> -->
    <div class="card-body">
      <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div class="mb-3">
          <label for="nama">Nama Kategori</label>
          <input type="nama" class="form-control" id="nama" placeholder="Enter text" name="nama">
        </div>
        <div class="mb-3">
          <label for="deskripsi">Deskripsi</label>
          <input type="textarea" class="form-control" id="deskripsi" name="deskripsi">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  <!-- </div> -->
</div>
@endsection
