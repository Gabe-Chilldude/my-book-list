<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showBooks()  {
        return view('books.books');
    }

    public function showBookRegister()  {
        return view('books.register');
    }

    public function addBook(request $request)  {

        $validate = request()->validate([
            'title' => ['required', 'max:255'],
            'sub_title' => ['required', 'max:255'],
            'issue' => ['required'],
            'date' => ['required']
        ]);

        if($validate)  {

        $book = new Book;

        $book->title = $request->title;
        $book->sub_title = $request->sub_title;
        $book->author = $request->author;
        $book->issue = $request->issue;
        $book->date_of_publish = $request->date;
        $book->cover_url = $request->cover_url;
        $book->user_id = $request->user_id;

        $book->save();

        return redirect('/');

        } else {
            return redirect()->back()->withErrors(['title' => 'Campo Obrigatório']);
        }

    }
}
