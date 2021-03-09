<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index()
    {
        $user_admin = user_admin::all();

        return view('user_admin/index', compact('user_admin'));
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
