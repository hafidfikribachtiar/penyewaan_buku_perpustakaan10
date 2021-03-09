<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transactions::all();

        return view('transactions/index', compact('transactions'));
    }

    public function members(){
        return view('transactions/create');
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
