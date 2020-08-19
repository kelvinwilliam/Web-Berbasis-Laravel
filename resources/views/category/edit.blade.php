@extends('layout.main')

@section('title','Ubah Category')

@section('container')
<form action="/category/{{$category->id}}" method="post">
    @method("patch")
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Nama Category" name="name" value="{{$category->name}}">
        @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
    </div>

    <input type="submit" name="btnSubmit" class="btn btn-default">
</form>

@endsection