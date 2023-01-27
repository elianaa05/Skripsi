@extends('layouts.frontend')

@section('tambahbooking')
<div class="col-xl">
  <div class="card mb-4">
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="namaBarang" placeholder={{$barangjuals->nama_barangjual}} />
        </div>
        <div class="mb-3">
          <label class="form-label">Gambar</label>
          <input class="form-control" type="file" id="gambar" multiple />
        </div>
        <div class="mb-3">
          <label for="defaultSelect" class="form-label">Nama Kategori</label>
          <select id="defaultSelect" class="form-select">
            <option>Default select</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
  </div>
</div>
@endsection