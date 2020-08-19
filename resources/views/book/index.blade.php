@extends('layout.main')

@section('title','Daftar Book')

@section('container')

@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<a href="{{ url('/book/create') }}" class="btn btn-dark">Input Data</a>
<br>
<br>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Description</th>
            <th>Cover</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($book as $bk)
        <tr>
            <td>{{ $bk->isbn }}</td>
            <td>{{ $bk->title }}</td>
            <td>{{ $bk->author }}</td>
            <td>{{ $bk->publisher }}</td>
            <td>{{ $bk->description }}</td>
            <td> <img style="width:100%" class="img-tbl" src="storage/covers/{{ $bk->cover }}"> </td>
            <td>{{ $bk->category_id }}</td>
            <td>
                <a href="/book/{{ $bk->isbn }}/edit" class="btn btn-dark btn-sm"> Edit </a>
                <form action="/book/{{$bk->isbn}}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-dark btn-sm"> Delete </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection