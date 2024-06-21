@extends('parts.body')
@section('title', 'Resgistrar Livro')

@section('content')

<form action="/books/new" method="POST">

    @csrf
    
    <label for="title">Título do livro</label>
    <input type="text" name="title">

    <label for="sub_title">Subtítulo do livro</label>
    <input type="text" name="sub_title">

    <label for="author">Nome do autor</label>
    <input type="text" name="author">

    <label for="issue">Edição</label>
    <input type="number" name="issue">

    <label for="date">Data de lançamento</label>
    <input type="date" name="date">
    
    <label for="cover_url">Url da imagem de capa</label>
    <input type="text" name="cover_url">
    
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

    <input type="submit">

</form>

@endsection

