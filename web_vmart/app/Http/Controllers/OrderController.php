<?php

namespace App\Http\Controllers;
use App\Models\order;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function index(){
        $data = [
            "orders" => order::orderBy("id", "DESC")->get(),
            "customer" => customer::orderBy("id", "DESC")->get()
        ];
        return view('/admin/pesanan/pesanan', $data);
    }
    public function view($id){
        $data = [
            //"kategori" => product_category::get()
            // "data" => order::where("id", $id)->first()
            "detail" => order::where("user_id", $id)->first()
        ];
    return view('/admin/pesanan/detail_pesanan', $data);
    }
}
