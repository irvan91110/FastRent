<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Tripay\TripayController;
use Carbon\Carbon;

use App\Models\data_mobil;
use Illuminate\Http\Request;


class checkoutController extends Controller
{
    public function select_payment(data_mobil $id, Request $request)
    {


        $Tripay = new TripayController();
        $channel = $Tripay->GetPaymentChannell();

        // get total number of minutes between from and throung date
        $days = Carbon::parse(date('Y-m-d', strtotime($request->input('sd'))))->diffInDays(Carbon::parse(date('Y-m-d', strtotime($request->input('ed'))))) + 1;

        // json_decode($id);
        return view('checkout', ['payment_method' => $channel, 'data_mobil' => $id, 'perkalian' => $days]);

    }

    public function store(data_mobil $id, Request $request)
    {
        $Tripay = new TripayController();

        return $Tripay->purchase($id, $request);
    }

    public function transaction()
    {
        // return date('Y:M:D H:i:s', '1670858323'); convert time
        $Tripay = new TripayController();

        return $Tripay->transaction();
    }
    public function details_transaction($id)
    {
        $Tripay = new TripayController();

        return $Tripay->details_transaction($id);


    }


}