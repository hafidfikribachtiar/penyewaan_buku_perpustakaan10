<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Members::all();

        return view('members/index', compact('members'));
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
