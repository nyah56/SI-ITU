@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<h1 class="h3 ml-1 mb-2 text-gray-800">Data Produk</h1>


<div class="d-flex bd-highlight mb-3">
  <div class="p-2 bd-highlight"><a href="/produk/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a></div>
 
  <div class="ml-auto p-2 bd-highlight"><a href="/produk/cetak" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Cetak Data</a></div>
</div>
    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Produk</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $p)
                    <tr class="text-center">
                        <td>{{$p->id_produk}}</td>
                        <td >{{ $p->nama_produk}}</td>
                        <td><div class="d-flex justify-content-center"><a href="/produk/edit/{{$p->id_produk}}" class="btn btn-warning mr-3"><i class="far fa-edit mr-2"></i>Edit</a>
                            <a href="/produk/destroy/{{ $p->id_produk }}"  onclick="return confirm('Yakin Hapus data ID: {{ $p->id_produk }} ?')"  class="btn btn-danger delete"><i class="fas fa-trash mr-2"></i>Hapus</a></div>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
    
    
@endsection