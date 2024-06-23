@yield('book_item')
<div class="book_item">
    @if ($book->cover_url != '')
    
      <img src="{{$book->cover_url}}" class="book_cover" alt="capa de {{$book->title}}">  

    @endif

    <div class="book_info">
        <h2 class="title book_title">{{$book->title}}</h2>
        <p class="title book_sub_title">{{$book->sub_title}}</p>
        <ul class="list_book text">
            <li>Autor: {{$book->author}}</li>
            <li>Edição: {{$book->issue}}º</li>
            <li>Editora: {{$book->publisher}}</li>
            <li>Publicação: {{$book->date_of_publish}}</li>
        </ul>

        <form class="book_form flex" method="POST" action="books/interactions">
            @csrf
            <input type="hidden" name="id" value="{{$book->id}}">
            <button name="action" type="submit" class="button edit" value="edit"><svg width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="edit"> <g> <path d="M20,16v4a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V6A2,2,0,0,1,4,4H8" fill="none" stroke="#fff0db" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="--darkreader-inline-stroke: #ffdfb3;" data-darkreader-inline-stroke=""></path> <polygon fill="none" points="12.5 15.8 22 6.2 17.8 2 8.3 11.5 8 16 12.5 15.8" stroke="#fff0db" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="--darkreader-inline-stroke: #ffdfb3;" data-darkreader-inline-stroke=""></polygon> </g> </g> </g> </g></svg></button>
            <button name="action" type="submit" class="button delete" value="delete"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 6.77273H9.2M19 6.77273H14.8M9.2 6.77273V5.5C9.2 4.94772 9.64772 4.5 10.2 4.5H13.8C14.3523 4.5 14.8 4.94772 14.8 5.5V6.77273M9.2 6.77273H14.8M6.4 8.59091V15.8636C6.4 17.5778 6.4 18.4349 6.94673 18.9675C7.49347 19.5 8.37342 19.5 10.1333 19.5H13.8667C15.6266 19.5 16.5065 19.5 17.0533 18.9675C17.6 18.4349 17.6 17.5778 17.6 15.8636V8.59091M9.2 10.4091V15.8636M12 10.4091V15.8636M14.8 10.4091V15.8636" stroke="#fff0db" stroke-linecap="round" stroke-linejoin="round" style="--darkreader-inline-stroke: #ffdfb3;" data-darkreader-inline-stroke=""></path> </g></svg></button>
        </form>

    </div>
</div>