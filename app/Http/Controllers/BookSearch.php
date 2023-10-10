<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookSearch extends Controller
{
    public function index()
    {
        return view('booksearch');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $books = DB::table('books')->where('title', 'like', '%'.$search.'%')->paginate(5);
        return view('booksearch', ['books' => $books]);
    }

    public function searchByAuthor(Request $request)
    {
        $search = $request->get('search');
        $books = DB::table('books')->where('author', 'like', '%'.$search.'%')->paginate(5);
        return view('booksearch', ['books' => $books]);
    }

    public function searchByCategory(Request $request)
    {
        $search = $request->get('search');
        $books = DB::table('books')->where('category', 'like', '%'.$search.'%')->paginate(5);
        return view('booksearch', ['books' => $books]);
    }

    public function searchByPublisher(Request $request)
    {
        $search = $request->get('search');
        $books = DB::table('books')->where('publisher', 'like', '%'.$search.'%')->paginate(5);
        return view('booksearch', ['books' => $books]);
    }

    public function searchByYear(Request $request)
    {
        $search = $request->get('search');
        $books = DB::table('books')->where('year', 'like', '%'.$search.'%')->paginate(5);
        return view('booksearch', ['books' => $books]);
    }

    public function searchByISBN(Request $request)
    {
        $search = $request->get('search');
        $books = DB::table('books')->where('isbn', 'like', '%'.$search.'%')->paginate(5);
        return view('booksearch', ['books' => $books]);
    }
}