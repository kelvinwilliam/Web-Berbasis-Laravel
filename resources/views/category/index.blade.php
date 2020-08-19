@extends('layout.main')

@section('title','Daftar Category')

@section('container')

@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<a href="{{ url('/category/create') }}" class="btn btn-dark">Input Data</a>
<br>
<br>
<table id="myTable" class="display">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->name }}</td>
            <td>
                <a href="/category/{{ $cat->id }}/edit" class="btn btn-dark btn-sm"> Edit </a>
                <form action="/category/{{$cat->id}}" class="d-inline" method="post">
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