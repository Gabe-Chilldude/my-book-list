<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function showBooks()  {
        $books = DB::table('books')->where('user_id', Auth::id())->simplePaginate(15);



        return view('books.books', ['books' => $books]); 
    }

    public function showBookRegister()  {
        return view('books.register');
    }

    public function addBook(request $request)  {

        $validate = request()->validate([
            'title' => ['required', 'max:255'],
            'sub_title' => ['nullable', 'max:255'],
            'issue' => ['required'],
            'publisher' => ['required', 'max:255'],
            'date' => ['required'],
            'cover_url' => ['nullable', 'max:255']
        ]);

        if($validate)  {

        $book = new Book;

        $book->title = $request->title;
        $book->sub_title = $request->sub_title;
        $book->author = $request->author;
        $book->issue = $request->issue;
        $book->publisher = $request->publisher;
        $book->date_of_publish = $request->date;
        $book->cover_url = $request->cover_url;
        $book->user_id = $request->user_id;

        $book->save();

        return redirect('/');

        } else {
            return redirect()->back()->withErrors(['title' => 'Campo Obrigatório']);
        }

    }

    public function bookInteractions(request $request)  {

        if($request->action == 'edit')  {
            return view('books.edit', ['id' => $request->id]);
        } else if($request->action == 'delete')  {
            $this->removeBook($request);
        }

        return redirect('/  ');

    }

    public function showEditBook($id) {

        return view('books.edit', ['id' => $id]);

    }

    public function editBook(request $request) {
        
        $columns = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'author' => $request->author,
            'issue' => $request->issue,
            'publisher' => $request->publisher,
            'date_of_publish' => $request->date,
            'cover_url' => $request->cover_url
        ];

        $validate = request()->validate([
            'title' => ['required', 'max:255'],
            'sub_title' => ['nullable', 'max:255'],
            'issue' => ['required'],
            'publisher' => ['required', 'max:255'],
            'date' => ['required'],
            'cover_url' => ['nullable', 'max:255']
        ]);

        if($validate)  {
            foreach($columns as $column=>$value) {

                DB::table('books')->where('id', $request->id)->update([$column => $value]);

            }
            return redirect('/');
        } else  {
            return redirect()->back()->withErrors(['title' => 'Campo Obrigatório']);
        }


    }

    public function removeBook(request $request)  {
        $id = $request->id;

        DB::table('books')->where('id', $id)->delete();

        return redirect('/');
    }
}

