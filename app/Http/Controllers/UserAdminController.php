<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAdminController extends Controller
{
    public function index()
    {
        $useradmin = DB::table('useradmin')->get();
        return view ('useradmin.index', compact('useradmin'));
    }

    //form tambah
    public function postsave (Request $request){
        DB::table('useradmin')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/admin/useradmin');
    }

    //simpan form
    public function edit ()
    {
        return view ('useradmin.edit');
    }

    //form edit
    public function delete ($id)
    {
        DB::table('useradmin')->where('id', $id)->delete();
        return redirect('/useradmin');
    }

    //hapus data
    public function detail ($id)
    {
        //
    }

    //detail data
    public function add ()
    {
        return view ('useradmin/add');
    }
}
