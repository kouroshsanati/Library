<?php

namespace Modules\Book\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Book\Model\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('book::index', compact(['books']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'isbn' => 'required',
            'price' => 'required',
        ]);
        Book::query()->create($validated);
        return redirect()->route('books.index')->with('success', 'Book Created');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::query()->find($id);
        return view('book::show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::query()->find($id);
        return view('book::edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data['name'] = $request->get('name');
        $data['price'] = $request->get('price');
        $data['isbn'] = $request->get('isbn');

        Book::query()->where('id', $id)->update($data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::query()->where('id', $id)->delete();
    }

    public function delete()
    {

        $books = Book::onlyTrashed()->get();
        return view('book::delete', compact('books'));
    }

    public function deleteForce($id)
    {

        $book = Book::onlyTrashed()->find($id);
        $book->forceDelete();
    }
}
