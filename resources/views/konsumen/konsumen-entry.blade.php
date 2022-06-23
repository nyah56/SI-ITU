@extends('layouts.main')
@section('container')
<div class="container-md bg-white p-5 mt-4 shadow-sm">
    <h1 class="h3 mb-3 text-gray-800">Tambah data Konsumen</h1>
    <form action="{{ url('/konsumen/store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">ID Konsumen</label>
            <input type="text" name="id_konsumen" class="form-control" id="">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Konsumen</label>
            <input type="text" name="nama_konsumen" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Contact</label>
            <input type="text" name="contact" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="">

        </div>
      
        <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
