@extends('layouts.layouts')

@section('title')
    Daftar Kategori
@endsection

@section('tambah')
<a href="{{route('tambahkategori')}}"><button type="button" style="margin-right : 400px" class="btn rounded-pill btn-primary mb-3">
    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah
</button></a>
@endsection

@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID Kategori</th>
        <th>Nama Kategori</th>
        <th>Deskripsi</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0 text-center">
      @foreach($kategori as $k)
      <tr>
        <td>{{$k->idkategori}}</td>
        <td>{{$k->nama}}</td>
        <td>
            <div style="text-overflow: ellipsis">
                {{$k->deskripsi}}
            </div>
        </td>
        <td>
          <button type="button" class="btn btn-icon btn-secondary">
                <a href="{{route('category.edit', $k->idkategori)}}">
                  <span class="tf-icons bx bx-edit-alt"></span>
                </a>
          </button>
          <form method="POST" action="{{route('category.destroy', $k->idkategori)}}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-icon btn-danger tf-icons bx bx-trash " value="delete" onclick="if(!confirm('are you sure to delete this record?')) return false;"></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection