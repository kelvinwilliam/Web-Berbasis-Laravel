@extends('layout.main')

@section('title','Form Book')

@section('container')
<form action="/book" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control @error('isbn') is-invalid @enderror" placeholder="Masukan ISBN" name="isbn" maxlength="13" minlength="13" value="{{old('isbn')}}">
        @error('isbn') <div class="invalid-feedback"> {{ $message }} </div> @enderror
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan Title" name="title" value="{{old('title')}}">
        @error('title') <div class="invalid-feedback"> {{ $message }} </div> @enderror
    </div>

    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control @error('author') is-invalid @enderror" placeholder="Masukan Author" name="author" value="{{old('author')}}">
        @error('author') <div class="invalid-feedback"> {{ $message }} </div> @enderror
    </div>

    <div class="form-group">
        <label for="publisher">Publisher</label>
        <input type="text" class="form-control @error('publisher') is-invalid @enderror" placeholder="Masukan Publisher" name="publisher" value="{{old('publisher')}}">
        @error('publisher') <div class="invalid-feedback"> {{ $message }} </div> @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Masukan Description" name="description" value="{{old('description')}}">
        @error('description') <div class="invalid-feedback"> {{ $message }} </div> @enderror
    </div>

    <div class="form-group">
        <label for="cover">Cover</label>
        <input type="file" id="bookCover" name="cover" class="form-control" accept="image/png, image/jpeg">
    </div>

    <div class="form-group">
        <label for="cat_id">Category ID</label>
        <input type="text" class="form-control @error('cat_id') is-invalid @enderror" placeholder="Masukan Category id" name="cat_id" value="{{old('cat_id')}}">
        @error('cat_id') <div class="invalid-feedback"> {{ $message }} </div> @enderror
    </div>


    <input type="submit" name="btnSubmit" class="btn btn-default">
</form>

@endsection