@extends('parts.body')

@section('title', 'Login')

@section('body_atrb', 'class=login')

@section('content')


    <section class="body_container login">
            @if ($errors->any())
                <div>

                    <ul>

                        @foreach($errors->all() as $error)
                            <li class="title" style="color:red;">{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>
            @endif

        <h1 class="title big">Vivlio</h1>

        <form class="form" action="/accounts/auth" method="POST">
            @csrf
            <label for="email" class="title">Email</label>
            <input type="email" name="email" class="form_input">
            
            <label for="password" class="title">Senha</label>
            <input type="password" name="password" class="form_input">

            <div class="login_button">
                <button type="submit" class="button">Entrar</button>

                <a href="/accounts/register" class="text">Ainda não possui conta?</a>
            </div>
        </form>
    </section>

@endsection