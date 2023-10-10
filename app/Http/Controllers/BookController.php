<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function search(Request $request)
    {
        $bookName = $request->input('book_name');
        $isbn = $request->input('ISBN');
        $genre = $request->input('genre');
        $author = $request->input('author');
        $publicationYear = $request->input('publication_year');

        $books = Book::where('book_name', 'like', "%$bookName%")
            ->orWhere('ISBN', 'like', "%$isbn%")
            ->orWhere('genre', 'like', "%$genre%")
            ->orWhere('author', 'like', "%$author%")
            ->orWhere('publication_year', 'like', "%$publicationYear%")
            ->get();

        if ($books->isEmpty()) {
            return "Pencarian tidak ditemukan.";
        }

        return view('books.search-results', compact('books'));
    }
}
