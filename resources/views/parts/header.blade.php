
<header class="header" id="header">
    <h1 class="title logo">Vivlio</h1>

        <div class="flex">
            <h3 class="title user">{{Auth::user()->name}}</h3>

            <ul class="flex" style="align-items:center;">
                <li><a href="/" class="text very_light main_color">Livros</a>
                <a href="/accounts/logout" class="text very_light main_color">Sair</a></li>
            </ul>
        </div>
</header>