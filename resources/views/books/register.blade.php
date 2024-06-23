@extends('parts.body')
@section('title', 'Resgistrar Livro')


@section('content')

    @include('parts.header')

<section class="login books">

    <section class="body_container login books">
        <h1 class="title big">Adicionar novo livro</h1>

        <form action="/books/new" class="form" method="POST">

            @csrf
            
            <label for="title" class="title">Título do livro</label>
            <input type="text" name="title" class="form_input">

            <label for="sub_title" class="title">Subtítulo do livro</label>
            <input type="text" name="sub_title" class="form_input">

            <label for="author" class="title">Nome do autor</label>
            <input type="text" name="author" class="form_input">

            <label for="issue" class="title">Edição</label>
            <input type="number" name="issue" class="form_input">

            <label for="publisher" class="title">Editora</label>
            <input type="text" name="publisher" class="form_input">

            <label for="date" class="title">Data de lançamento</label>
            <input type="date" name="date" class="form_input">

            <label for="cover_url" class="title">Url da imagem de capa</label>
            <input type="text" name="cover_url" class="form_input">
            
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

            <button type="submit" class="button">Cadastrar Livro</button>

        </form>

    </section>

</section>

@endsection

