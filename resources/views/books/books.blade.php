@extends('parts.body')
@section('title', 'Seus Livros')

@section('content')

@foreach ($books as $book)

    <p>{{$book->title}}</p>

@endforeach

@endsection