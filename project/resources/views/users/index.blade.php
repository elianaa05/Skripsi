@extends('layouts.layouts')

@section('title')
    Daftar User
@endsection

@section('tambah')
<a href="{{route('tambahuser')}}"><button type="button" style="margin-right : 400px" class="btn rounded-pill btn-primary mb-3">
    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah
</button></a>
@endsection

@section('usercontent')
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th>Foto</th>
        <th>Roles</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      @foreach($users as $u)
      <tr>
        <td>{{$u->iduser}}</td>
        <td>{{$u->nama}}</td>
        <td>{{$u->username}}</td>
        <td>{{$u->password}}</td>
        <td>
            <div>
                <img src="{{asset('/img/').'/'.$u->foto}}" height ='100px'/>
            </div>
        </td>
        <td>{{$u->role}}</td>
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