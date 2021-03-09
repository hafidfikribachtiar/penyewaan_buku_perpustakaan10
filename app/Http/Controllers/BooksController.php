<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Category;
use App\Models\Books;

class BooksController extends Controller
{
    public function index(){

        $books = DB::table('books')->get();
        
        // return $books;

        return view('books.index', compact('books'));
    }

    public function books(Request $request){
        DB::table('books')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'books_categories' => $request->books_categories
        ]);
        return redirect('/admin/books');
    }

    //form tambah
    public function postsave ($id)
    {
        //
    }

    //simpan form
    public function edit ($id)
    {
        //
    }

    //form edit
    public function delete ($id)
    {
        //
    }

    //hapus data
    public function detail ($id)
    {
        //
    }

    //detail data
    public function add ($id)
    {
        //
    }
}
