@extends('parts.body')
@section('title', 'Seus Livros')

@section('content')

@include('parts.header')

<section class="body">

    <section class="banner">
        <h1 class="title big">Adicione um livro a sua coleção</h1>
        <a href="books/register"><button class="button main">+ Adicionar Livro</button></a>
    </section>

    {{$books->links()}}
    
    <section class="books_section">

        @foreach ($books as $book)
            @include('parts.book_item')
        @endforeach
        


    </section>
</section>


@endsection