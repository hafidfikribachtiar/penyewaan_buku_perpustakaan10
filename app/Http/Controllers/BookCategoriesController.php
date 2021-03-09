<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookCategoriesController extends Controller
{
    public function index()
    {
        $books_categories = books_categories::all();

        return view('books_categories/index', compact('books_categories'));
    }

    public function books_categories(){
        return view('books_categories/create');
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
