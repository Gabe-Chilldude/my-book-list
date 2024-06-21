<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function showBooks()  {
        $books = DB::table('books')->where('user_id', Auth::id())->get();


        return view('books.books', ['books' => $books]); 
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

    public function removeBook(request $request)  {
        $id = $request->id;

        DB::table('books')->where('id', $id)->delete();

        return redirect('/');
    }
}

