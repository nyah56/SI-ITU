@extends('layouts.main')
@section('container')
<div class="container-md bg-white p-5 mt-4 shadow-sm">
    <h1 class="h3 mb-3 text-gray-800">Ubah data Produk</h1>
    <form action="{{ url('/produk/update/' . $produk->id_produk) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">ID Produk</label>
            <input class="form-control" value="{{ $produk->id_produk }}"id="disabledInput" type="text" name="id_produk"placeholder="ID_Produk" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
            <input type="text" value="{{ $produk->nama_produk }}"  class="form-control" name="nama_produk"id="">

        </div>
          
        <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
