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
    public function delete(Request $request)
    {
        coupon::where("id", $request->id)->delete();

        return redirect('/kupon')->with('pesan','data berhasil di hapus');
    }
}
