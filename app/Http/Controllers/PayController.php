<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PayController extends Controller
{


    public function payment()
    {
        $list_banks = $this->listOfBanks();

        return view('payment', compact(['list_banks']))->with('i', (request()->input('page', 1)-1)*5);
    }
    private function listOfBanks()
    {
        $list_banks =  json_decode(file_get_contents('https://techpay.technorio.com.np/sandbox/public/api/v1/nPay/get-bank-list?serviceCode=TOBPS&serviceApiKey=TOBPS' ), true);
        return $list_banks;
    }


}
