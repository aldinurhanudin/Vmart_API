<?php

namespace App\Http\Controllers;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class PaymentController extends Controller
{
    public function index(){
        $data = [

            "payments" => payment::orderBy("id", "DESC")->get()
        ];
        return view('/admin/pembayaran', $data);
    }
}
