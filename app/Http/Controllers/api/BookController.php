<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function store(BookStoreRequest $request)
    {
        $validatedData = $request->validated();

        $book = Book::create(['title' => $validatedData['title']]);
        if (isset($validatedData['author_ids'])) {
            $book->authors()->sync($validatedData['author_ids']);
        }


        return response()->json($book);
    }


    public function update(BookUpdateRequest $request, $id)
    {
        $validatedData = $request->validated();
        $book = Book::findOrFail($id);

        if (isset($validatedData['title'])) {
            $book->update(['title' => $validatedData['title']]);
        }

        if (isset($validatedData['author_ids'])) {
            $book->authors()->sync($validatedData['author_ids']);
        }

        return response()->json($book);
    }




    public function index()
    {
        $books = Book::all();
        return response()->json($books);

    }
    public function show($id)
    {
        $book = Book::find($id);
        if (! $book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book);

    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if (! $book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        $book->delete();
        return response()->json(['message' => 'Book has been deleted'], 204);
    }
}
