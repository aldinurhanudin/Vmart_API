<?php

namespace App\Http\Controllers;
use App\Models\coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        $data = [

            "coupon" => coupon::orderBy("id", "DESC")->get()
        ];
        return view('/admin/kupon', $data);
    }
}
