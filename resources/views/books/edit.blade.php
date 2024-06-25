
@extends('parts.body')
@section('title', 'Resgistrar Livro')


@section('content')

    @include('parts.header')

@php

    $books = DB::table('books')->where('id', $id)->get();

    foreach($books as $book_item)  {
        $book = $book_item;
    }

@endphp

<section class="login books">

    <section class="body_container login books">


            @if ($errors->any())
                <div>

                    <ul>

                        @foreach($errors->all() as $error)
                            <li class="title" style="color:red;">{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>
            @endif

        <h1 class="title big">Adicionar novo livro</h1>

        <form action="/books/edit" class="form" method="POST">

            @csrf

            <input type="hidden" name="id" value="{{$id}}">
            
            <label for="title" class="title">Título do livro</label>
            <input type="text" name="title" class="form_input" placeholder="{{$book->title}}" value="{{$book->title}}">

            <label for="sub_title" class="title">Subtítulo do livro</label>
            <input type="text" name="sub_title" class="form_input" placeholder="{{$book->sub_title}}" value="{{$book->sub_title}}">

            <label for="author" class="title">Nome do autor</label>
            <input type="text" name="author" class="form_input" placeholder="{{$book->author}}" value="{{$book->author}}">

            <label for="issue" class="title">Edição</label>
            <input type="number" name="issue" class="form_input" placeholder="{{$book->issue}}" value="{{$book->issue}}">

            <label for="publisher" class="title">Editora</label>
            <input type="text" name="publisher" class="form_input" placeholder="{{$book->publisher}}" value="{{$book->publisher}}">

            <label for="date" class="title">Data de lançamento</label>
            <input type="date" name="date" class="form_input" placeholder="{{$book->date_of_publish}}" value="{{$book->date_of_publish}}">

            <label for="cover_url" class="title">Url da imagem de capa</label>
            <input type="text" name="cover_url" class="form_input" placeholder="{{$book->cover_url}}" value="{{$book->cover_url}}">
            
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

            <button type="submit" class="button">Atualizar Livro</button>

        </form>

    </section>

</section>

@endsection