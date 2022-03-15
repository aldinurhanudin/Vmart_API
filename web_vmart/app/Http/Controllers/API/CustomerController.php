<?php

namespace App\Http\Controllers\API;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{
    public function index(){
        $data = [

            "customers" => customer::orderBy("id", "DESC")->get()
        ];
        // return view('/admin/pelanggan', $data);
        return response()->json(['messege' => 'request success', 'data' => $data],200);
    }

    public function delete(Request $request)
    {
        customer::where("id", $request->id)->delete();

        return redirect('/pelanggan')->with('pesan','data berhasil di hapus');
    }


}
