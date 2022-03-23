<?php

namespace App\Http\Controllers;
use App\Models\payment;
use App\Models\customer;
use App\Models\product_category;
use App\Models\order;
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
        return view('/admin/pembayaran', $data);
    }
    public function view($id){
        $data = [
            "kategori" => product_category::get()
            // "data" => order::where("id", $id)->first()
        ];
    return view('/admin/detail_pembayaran', $data);
    }


}
