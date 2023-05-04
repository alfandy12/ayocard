<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //Maaf kan kode jika tidak lengkap waktu yang sangat singkat

    public function index()
    {
        $accounts = Account::all();
        $transactions = Transction::all();
        $transactions = $transactions->map(function($item){
            $points = 0;
            if ($item->description == 'Beli Pulsa') {
                if ($item->ammount > 30000) {
                    $points = floor(($item->ammount - 30000) / 1000) * 2 + 40;
                } else if ($item->ammount > 10000) {
                    $points = floor(($item->ammount - 10000) / 1000) + 10;
                }
            } else if ($item->description == 'Bayar Listrik') {
                if ($item->ammount > 100000) {
                    $points = floor(($item->ammount - 100000) / 2000) * 2 + 50;
                } else if ($item->ammount > 50000) {
                    $points = floor(($item->ammount - 50000) / 2000) + 25;
                }
            }
            return (object)[
                "id" => $item->id,
                "account_id" => $item->account_id,
                "transaction_date" => $item->transaction_date,
                "description" => $item->description,
                "debit_credit" => $item->debit_credit,
                "ammount" => $item->ammount,
                "created_at" =>$item->created_at,
                "updated_at" =>$item->updated_at,
                'point' => $points,
                'account' => $item->account,
            ];
           
        });
      
        return view('welcome', compact('accounts', 'transactions'));
    }
    public function store(Request $request)
    {
        Account::create([
            'name' => $request->name
        ]);
        return redirect()->back()->with('info', 'berhasil tambahkan data');
    }
    public function transaction_store(Request $request)
    {
        Transction::create($request->all());
        return redirect()->back()->with('info', 'berhasil tambahkan data');
    }
    public function transaction_report(Request $request)
    {
       
       $reports = Transction::where('account_id', $request->account_id)->whereBetween('transaction_date', [$request->startDate, $request->endDate])->get();
      
        return view('tes-saja', compact('reports'));
    }
}

