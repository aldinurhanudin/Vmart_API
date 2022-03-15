<?php

namespace App\Http\Controllers\API;
use App\Models\payment;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class PaymentController extends Controller
{
    public function index(){
        $data = [

            "payments" => payment::orderBy("id", "DESC")->get(),
            "customer" => customer::orderBy("id", "DESC")->get(),
        ];
        // return view('/admin/pembayaran', $data);
        return response()->json(['messege' => 'request success', 'data' => $data],200);
    }


}
