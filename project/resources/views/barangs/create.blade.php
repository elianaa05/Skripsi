@extends('layouts.layouts')

@section('title')
    Form Tambah Barang
@endsection

@section('content')
<div class="col-xl">
  <div class="card mb-4">
    <div class="card-body">
      <form method="POST" action="{{route('barangs.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="nama_barang" name="nama_barang" />
        </div>
        <div class="mb-3">
          <label class="form-label">Gambar</label>
          <input class="form-control" type="file" id="gambar" name="gambar" multiple />
        </div>
        <div class="mb-3">
          <label for="kategori" class="form-label">Nama Kategori</label>
          <select class="form-control" id="kategori">
            <option value="">--Pilih Kategori--</option>
            @foreach($kategoris as $k)
              <option value="{{$k->idkategori}}">{{$k->nama}}</option>
            @endforeach
          </select>
          <!-- <input type="hidden" id="category_id" name="category_id" value=""> -->
          <input type="hidden" id="idkategori" name="idkategori" value="">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
  </div>
</div>
@endsection

@section('javascript')
<script>
  $('#kategori').on('change', function(){
    $('#idkategori').val($('#kategori').val());
  })
</script>
@endsection