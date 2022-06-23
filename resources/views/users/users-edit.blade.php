@extends('layouts.main')
@section('container')
<div class="container-md bg-white p-5 mt-4 shadow-sm">
    <h1 class="h3 mb-3 text-gray-800">Ubah Data User</h1>
    <form action="{{ url('/user/update/'.$user->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="name" value="{{ $user->name }}"class="form-control" id="">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" value="{{ $user->username }}"class="form-control" id="">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">New Password</label>
            <input type="password" name="password" class="form-control" id="">

        </div>
        <label for="exampleInputEmail1">Role ID</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="role_id" id="exampleRadios1" value="0" checked>
            <label class="form-check-label" for="exampleRadios1">
              Admin
            </label>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="role_id" id="exampleRadios2" value="1">
            <label class="form-check-label" for="exampleRadios2">
              User
            </label>
          </div>
        <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
