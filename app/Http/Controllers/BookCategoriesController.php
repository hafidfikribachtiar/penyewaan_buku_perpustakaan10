<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookCategoriesController extends Controller
{
    public function index()
    {
        $books_categories = DB::table('books_categories')->get();

        return view('books_categories.index', compact('books_categories'));
    }

    //form tambah
    public function postsave (Request $request){
        DB::table('bookcategories')->insert([
            'name' => $request->name
        ]);
        return redirect('/admin/bookcategories');
    }

    //simpan form
    public function edit ()
    {
        //
    }

    //form edit
    public function delete ($id)
    {
        DB::table('bookcategories')->where('id', $id)->delete();
        return redirect('/bookcategories');
    }

    //hapus data
    public function detail ($id)
    {
        //
    }

    //detail data
    public function add ()
    {
        return view ('bookcategories/add');
    }
}
