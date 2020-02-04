@extends('layouts/main')
@section('title', 'Home')

@section('contet')

<link rel="stylesheet" href="style.css">
        <form class="container" id="container">

        <div class="form-group  containe">
            <label for="Kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-control">
                 <option value="Administrasi">Administrasi</option>
                 <option value="Keamanan">Keamanan</option>
                 <option value="Kebersihan">Kebersihan</option>
                 <option value="Kesehatan">Kesehatan</option>
                
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection