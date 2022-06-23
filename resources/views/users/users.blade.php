@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<h1 class="h3 ml-1 mb-2 text-gray-800">Data User</h1>


<div class="d-flex bd-highlight mb-3">
  <div class="p-2 bd-highlight"><a href="/user/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Tambah User</a></div>
 
  
</div>
    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $p)
                    <tr class="text-center">
                        <td >{{ $p->name}}</td>
                        <td >{{ $p->username}}</td>
                        <td >***************</td>
                        <td >{{ $p->role_id}}</td>
                        <td><div class="d-flex justify-content-center"><a href="/user/edit/{{$p->id}}" class="btn btn-warning mr-3"><i class="far fa-edit mr-2"></i>Edit</a>
                            <a href="/user/destroy/{{ $p->id }}"  onclick="return confirm('Yakin Hapus data nama : {{ $p->name }} ?')"  class="btn btn-danger delete"><i class="fas fa-trash mr-2"></i>Hapus</a></div>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
    
    
@endsection