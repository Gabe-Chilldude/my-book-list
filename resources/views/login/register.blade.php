@extends('parts.body')
@section('title', 'Registro')

@section('content')

<style>
    body  {
        margin:0px;
        height:100vh;
        display:flex;
        align-items: center;
        justify-content: center;
    }
    form {
        height: 50vh;
        flex-direction: column;
        display:flex;
        align-items: center;
        justify-content: center;
    }

</style>

@if ($errors->any())
    <div>

        <ul>

            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>

    </div>
@endif

<form action="/accounts/new" method="POST">
    
    @csrf

    <label for="name">Nome</label>
    <input type="text" name="name">
    <label for="email">Email</label>
    <input type="email" name="email">
    <label for="password">Senha</label>
    <input type="password" name="password">

    <input type="submit">

</form>

@endsection