@extends('layouts.main')
@section('container')
<h1 class="h3 ml-1 mb-2 text-gray-800">Data Konsumen</h1>


<div class="d-flex bd-highlight mb-3">
  <div class="p-2 bd-highlight"><a href="/konsumen/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a></div>
 
  <div class="ml-auto p-2 bd-highlight"><a href="/konsumen/cetak" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Cetak Data</a></div>
</div>
    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Konsumen</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>ID Konsumen</th>
                        <th>Nama Konsumen</th>
                        <th>Contact</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($konsumen as $k)
                    <tr class="text-center">
                        <td>{{$k->id_konsumen}}</td>
                        <td >{{ $k->nama_konsumen}}</td>
                        <td>{{$k->contact}}</td>
                        <td >{{ $k->alamat}}</td>
                        <td><div class="d-flex justify-content-center"><a href="/konsumen/edit/{{ $k->id_konsumen }}" class="btn btn-warning mr-3"><i class="far fa-edit mr-2"></i>Edit</a>
                            <a href="/konsumen/destroy/{{ $k->id_konsumen }}" onclick=" return confirm('Yakin Hapus data ID: {{ $k->id_konsumen }} ?')"  class="btn btn-danger"><i class="fas fa-trash mr-2"></i>Hapus</a></div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection