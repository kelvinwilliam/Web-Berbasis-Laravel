<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = book::all();
        return view('book.index', ['book' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'cover' => 'image|nullable|max:1999',
            'cat_id' => 'required'
        ]);

        if($request->hasFile('cover')){
            $filename = $request->isbn;
            $extension = $request->file('cover')->getClientOriginalExtension();
            $fileNameToStore= $filename.'.'.$extension;
            $path = $request->file('cover')->storeAs('public/covers', $fileNameToStore);
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        book::create([
            'isbn' => $request->isbn,
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'description' => $request->description,
            'cover' => $fileNameToStore,
            'Category_id' => $request->cat_id,
        ]);

        return redirect('/book')->with('status', 'Data Book Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'cover' => 'image|nullable|max:2000',
            'cat_id' => 'required'
        ]);

        if($request->hasFile('cover')){
            $filename = $request->isbn;
            $extension = $request->file('cover')->getClientOriginalExtension();
            $fileNameToStore= $filename.'.'.$extension;
            $path = $request->file('cover')->storeAs('public/covers', $fileNameToStore);
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        Book::where('isbn', $book->isbn)
            ->update([
                'isbn' => $request->isbn,
                'title' => $request->title,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'description' => $request->description,
                'cover' => $fileNameToStore,
                'Category_id' => $request->cat_id
            ]);

        return redirect('/book')->with('status', 'Book Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        if($book->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/covers/'.$book->cover);
        }

        book::destroy($book->isbn);
        return redirect('/book')->with('status', 'Data Book Berhasil Dihapus!');
    }
}
