
<header class="header" id="header">
    <h1 class="title logo">Vivlio</h1>

        <div class="flex">
            <h3 class="title user">{{Auth::user()->name}}</h3>

            <ul class="flex">
                <li><a href="/" class="book_sub_title">Livros</a>
                <a href="/accounts/logout" class="book_sub_title">Sair</a></li>
            </ul>
        </div>
</header>