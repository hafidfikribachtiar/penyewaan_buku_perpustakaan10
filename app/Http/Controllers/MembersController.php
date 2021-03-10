<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function index()
    {
        $members = DB::table('members')->get();

        return view('members.index', compact('members'));
    }

    //form tambah
    public function postsave (Request $request){
        DB::table('members')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email
        ]);
        return redirect('/admin/members');
    }

    //simpan form
    public function edit ()
    {
        return view ('members.edit');
    }

    //form edit
    public function delete ($id)
    {
        DB::table('members')->where('id', $id)->delete();
        return redirect('/members');
    }

    //hapus data
    public function detail ($id)
    {
        //
    }

    //detail data
    public function add ()
    {
        return view ('members/add');
    }
}
