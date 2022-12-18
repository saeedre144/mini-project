<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $response = Http::get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=20&page=1&sparkline=false');

        $matches=$response->object();


        return view('test', compact(['matches']));
    }


    public function purchase(Request $request)
    {

       $crypto =  Storage::where('symbol',$request->input('symbol'))->first();
       if (! $crypto){
           return back();
       }
        $crypto->amount -= $request->input('amount');
        $crypto->save();
         $payment = Payment::create($request->all());

         return redirect('payments');
    }

    public function payment()
    {
        $payments = Payment::all();

        return view('payments' , compact('payments'));
    }
}
