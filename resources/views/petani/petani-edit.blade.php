@extends('layouts.main')
@section('container')
<div class="container-md bg-white p-5 mt-4 shadow-sm">
    <h1 class="h3 mb-3 text-gray-800">Ubah data Petani</h1>
    <form action="{{ url('/petani/update/'. $petani->id_petani) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">ID Petani</label>
            <input class="form-control" value="{{ $petani->id_petani }}"id="disabledInput" type="text" name="id_petani"placeholder="ID_Produk" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Petani</label>
            <input type="text" name="nama_petani" value ="{{ $petani->nama_petani }}"class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Contact</label>
            <input type="text" name="contact" value ="{{ $petani->contact }}" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" name="alamat"value ="{{ $petani->alamat }}" class="form-control" id="">

        </div>
      
        <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
