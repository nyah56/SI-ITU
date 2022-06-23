@extends('layouts.main')
@section('container')
<div class="container-md bg-white p-5 mt-4 shadow-sm">
    <h1 class="h3 mb-3 text-gray-800">Tambah data Persediaan</h1>
    <form action="{{ url('/persediaan/store') }}" method="post">
        @csrf
      
        <div class="form-group">
            <label for="exampleInputEmail1">ID Persediaan</label>
            <input type="text" name="id_persediaan" class="form-control" id="">
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
         
          <label for="exampleInputEmail1">Nama Petani</label>
          <select class="custom-select"name="nama_petani" id="">
      
            @foreach ($Petani as $p)
                <option value="{{ $p->id_petani }}">{{ $p->nama_petani }}</option>
            @endforeach
          </select>
        </div>
      
        <div class="form-group">
            <label for="exampleInputEmail1">Masa Kadaluarsa</label>
            <input type="date" name="masa_kadaluarsa" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" id="">
        </div>
        <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
