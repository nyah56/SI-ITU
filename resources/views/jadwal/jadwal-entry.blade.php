@extends('layouts.main')
@section('container')
<div class="container-md bg-white p-5 mt-4 shadow-sm">
    <h1 class="h3 mb-3 text-gray-800">Tambah data Jadwal</h1>
    <form action="{{ url('/jadwal/store') }}" method="post">
        @csrf
      
        <div class="form-group">
            <label for="exampleInputEmail1">ID Jadwal</label>
            <input type="text" name="id_jadwal" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">ID Pesan</label>
          <select class="custom-select"name="id_pesan" id="">
     
            @foreach ($Pesan as $p)
                <option value="{{ $p->id_pesan }}">{{ $p->id_pesan }}</option>
            @endforeach
          </select>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Konsumen</label>
          <select class="custom-select"name="nama_konsumen" id="">
     
            @foreach ($Konsumen as $k)
                <option value="{{ $k->id_konsumen }}">{{ $k->nama_konsumen }}</option>
            @endforeach
          </select>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
          <select class="custom-select"name="nama_produk" id="">
     
            @foreach ($Produk as $p)
                <option value="{{ $p->id_produk }}">{{ $p->nama_produk }}</option>
            @endforeach
          </select>

        </div>
      
        <div class="form-group">
            <label for="exampleInputEmail1">Pengiriman Hari</label>
            <input type="text" name="kirim_hari" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="">
        </div>
        <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
