@extends('layouts.main')
@section('container')
<h1 class="h3 ml-1 mb-2 text-gray-800">Data Pemesanan</h1>


<div class="d-flex bd-highlight mb-3">
  <div class="p-2 bd-highlight"><a href="/pemesanan/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a></div>
 

</div>
    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Pemesanan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>ID Pemesanan</th>
                        <th>Nama Konsumen</th>
                        <th>Nama Produk</th>
                        <th>Jumlah Pesanan</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesan as $p)
                    <tr class="text-center">
                        <td>{{$p->id_pesan}}</td>
                        <td >{{ $p->dataKonsumen->nama_konsumen}}</td>
                        <td>{{$p->dataProduk->nama_produk}}</td>
                        <td >{{ $p->jumlah}}</td>
                        <td>{{ $p->alamat }}</td>
                        <td><div class="d-flex justify-content-center"><a href="/pemesanan/edit/{{ $p->id_pesan }}" class="btn btn-warning mr-3"><i class="far fa-edit mr-2"></i>Edit</a>
                            <a href="/pemesanan/destroy/{{ $p->id_pesan }}" onclick=" return confirm('Yakin Hapus data ID: {{ $p->id_pesan }} ?')"  class="btn btn-danger"><i class="fas fa-trash mr-2"></i>Hapus</a></div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection