<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function storeForm(Request $request)
    {
        $form = new Form();

        $form->payer_name = request('payer_name');
        $form->payer_email = request('payer_email');
        $form->payer_phone = request('payer_phone');
        $form->payment_detail = request('payment_detail');
        $form->due_amount = request('due_amount');
        $form->order_id = $this->getOrderId();
        $form->tin = $this->getTin();


        $form->save();
            return redirect('/pay');
    }

    private function getOrderId(){

        do{
            $order_id = $this->generateUniqueCode();
            $checkExsitingOrderId = Form::where('order_id', $order_id)->get()->first();
        }while($checkExsitingOrderId);

        return $order_id;
    }

    private function getTin(){

        do{
            $tin = $this->generateUniqueCode();
            $checkExsitingTin = Form::where('tin', $tin)->get()->first();
        }while($checkExsitingTin);

        return $tin;
    }

    private function generateUniqueCode(){
        return rand(0000, 9999);
    }
}
