@extends('layouts.main')
@section('container')
<div class="container-md bg-white p-5 mt-4 shadow-sm">
    <h1 class="h3 mb-3 text-gray-800">Ubah data Konsumen</h1>
    <form action="{{ url('/konsumen/update/'. $konsumen->id_konsumen) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">ID Produk</label>
            <input class="form-control" value="{{ $konsumen->id_konsumen }}"id="disabledInput" type="text" name="id_produk"placeholder="ID_Produk" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Konsumen</label>
            <input type="text" name="nama_konsumen" value ="{{ $konsumen->nama_konsumen }}"class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Contact</label>
            <input type="text" name="contact" value ="{{ $konsumen->contact }}" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" name="alamat"value ="{{ $konsumen->alamat }}" class="form-control" id="">

        </div>
      
        <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
