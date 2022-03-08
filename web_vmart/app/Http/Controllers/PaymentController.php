<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $data = [

            "payments" => contact::orderBy("id", "DESC")->get()
        ];
        return view('/admin/pembayaran', $data);
    }
}
