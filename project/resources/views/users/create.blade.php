@extends('layouts.layouts')

@section('title')
    Form Tambah Users
@endsection

@section('content')
<div class = "col-xl">
  <!-- <div class="card mb-4"> -->
    <div class="card-body">
      <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
          <label for="username">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
          <label class="form-label">Foto</label>
          <input class="form-control" type="file" id="foto" name="foto" multiple />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  <!-- </div> -->
</div>
@endsection