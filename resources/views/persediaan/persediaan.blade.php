@extends('layouts.main')
@section('container')
<h1 class="h3 ml-1 mb-2 text-gray-800">Data Persediaan</h1>


<div class="d-flex bd-highlight mb-3">
  <div class="p-2 bd-highlight"><a href="/persediaan/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a></div>
    <div class="ml-auto p-2 bd-highlight"><a href="/persediaan/cetak" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Cetak Data</a></div>

</div>
    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Persediaan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>ID Persediaan</th>
                        <th>Nama Produk</th>
                        <th>Nama Petani</th>
                        <th>Masa Kadaluarsa</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persediaan as $p)
                    <tr class="text-center">
                        <td>{{$p->id_persediaan}}</td>
                        <td >{{ $p->dataProduk->nama_produk}}</td>
                        <td >{{ $p->dataPetani->nama_petani}}</td>
                        <td >{{ $p->masa_kadaluarsa}}</td>
                        <td >{{ $p->jumlah}}</td>
                        <td><div class="d-flex justify-content-center"><a href="/persediaan/edit/{{ $p->id_persediaan }}" class="btn btn-warning mr-3"><i class="far fa-edit mr-2"></i>Edit</a>
                            <a href="/persediaan/destroy/{{ $p->id_persediaan }}" onclick="return confirm('Yakin Hapus data ID: {{ $p->id_persediaan }} ?')"  class="btn btn-danger"><i class="fas fa-trash mr-2"></i>Hapus</a></div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

@endsection