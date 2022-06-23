@extends('layouts.main')
@section('container')
<h1 class="h3 ml-1 mb-2 text-gray-800">Data Jadwal</h1>


<div class="d-flex bd-highlight mb-3">
  <div class="p-2 bd-highlight"><a href="/jadwal/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a></div>
 
  <div class="ml-auto p-2 bd-highlight"><a href="/jadwal/cetak" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Cetak Data</a></div>
</div>
    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Jadwal</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>ID Jadwal</th>
                        <th>ID Pesan</th>
                        <th>Nama Konsumen</th>
                        <th>Nama Produk</th>
                        <th>Hari Dikirim</th>
                        <th>Alamat</th>
                        <th>Jumlah</th>
                        <th width=25%>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwal as $j)
                    <tr class="text-center">
                        <td>{{$j->id_jadwal}}</td>
                        <td >{{ $j->id_pesan}}</td>
                        <td >{{ $j->dataKonsumen->nama_konsumen}}</td>
                        <td >{{ $j->dataProduk->nama_produk}}</td>
                        <td >{{ $j->kirim_hari}}</td>
                        <td >{{ $j->alamat}}</td>
                        <td >{{ $j->jumlah}}</td>
                        <td><div class="d-flex justify-content-center"><a href="/jadwal/edit/{{ $j->id_jadwal }}" class="btn btn-warning mr-3"><i class="far fa-edit mr-2"></i>Edit</a>
                            <a href="/jadwal/destroy/{{ $j->id_jadwal}}" onclick="return confirm('Yakin Hapus data ID: {{ $j->id_jadwal}} ?')"  class="btn btn-danger"><i class="fas fa-trash mr-2"></i>Hapus</a></div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

@endsection