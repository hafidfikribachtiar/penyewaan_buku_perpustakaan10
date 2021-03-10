<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = DB::table('transactions')->get();
        return view('transactions.index', compact('transactions'));
    }

    //form tambah
    public function postsave (Request $request){
        DB::table('transactions')->insert([
            'trans_no' => $request->trans_no,
            'grand_total' => $request->grand_total,
            'created_by' => $request->created_by
        ]);
        return redirect('/admin/transactions');
    }

    //simpan form
    public function edit ()
    {
        return view ('transactions.edit');
    }

    //form edit
    public function delete ($id)
    {
        DB::table('transactions')->where('id', $id)->delete();
        return redirect('/transactions');
    }

    //hapus data
    public function detail ($id)
    {
        //
    }

    //detail data
    public function add ()
    {
        return view('transactions/add');
    }
}
