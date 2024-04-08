<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookStoreController extends Controller
{
    public function edit($id){
        $book = Book::find($id);
        return view('edit', ['book'=> $book]);
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author_name = $request->author_name;
        $book->ISBN = $request->ISBN;
        $book->published_year = $request->published_year;

        $book->save();
        return redirect()->route('book.index');
    }


    // CRUD


    //create
    public function create(){
        return view("create");
    }

    //read
    public function index(){
        $books = Book::all();
        return view("index", ['books'=>$books]);
    }

    //update
    public function update(Request $request, $id){
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author_name = $request->author_name;
        $book->ISBN = $request->ISBN;
        $book->published_year = $request->published_year;

        $book->save();
        return redirect()->route('book.index');
    }

    //destroy
    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book.index');
    }
}
