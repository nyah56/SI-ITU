@extends('layouts.main')
@section('container')
<div class="container-md bg-white p-5 mt-4 shadow-sm">
    <h1 class="h3 mb-3 text-gray-800">Tambah data Produk</h1>
    <form action="{{ url('/produk/store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">ID Produk</label>
            <input type="text" name="id_produk" class="form-control" id="">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" id="">

        </div>
        <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
