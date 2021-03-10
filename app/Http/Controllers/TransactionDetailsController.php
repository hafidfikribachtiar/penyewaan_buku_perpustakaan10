<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionDetailsController extends Controller
{
    // public function index()
    // {
    //     $transaction_details = Transaction Details::all();

    //     return view('transaction_details/index', compact('transaction_details'));
    // }

    // public function transaction_details(){
    //     return view('transaction_details/create');
    // }

    public function index(){
        $transactiondetails = DB::table('transactiondetails')->get();
        return view ('transactiondetails.index');
    }

    //form tambah
    public function postsave (Request $request){
        DB::table('transactiondetails')->insert([
            'books_name' => $request->books_name,
            'books_price' => $request->books_price,
            'quantity' => $request->quantity,
            'total' => $request->total
        ]);
        return redirect('/admin/transactiondetails');
    }

    //simpan form
    public function edit ()
    {
        return view ('transactiondetails.edit');
    }

    //form edit
    public function delete ($id)
    {
        //
    }

    //hapus data
    public function detail ($id)
    {
        DB::table('transactiondetails')->where('id', $id)->delete();
        return redirect('/transactiondetails');
    }

    //detail data
    public function add ()
    {
        return view ('transactiondetails/add');
    }
}
