<?php

namespace App\Http\Controllers\API;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{
    public function index(){

        $data = customer::select('address')->get();


        return response()->json(['messege' => 'request success', 'data'=>$data],200);
    }

    public function detail(){
        $data = [
            "pelanggan" => customer::select('delivery_data')->get(),

        ];

        //return view("/admin/anggota/v_detailanggota", $data);
        return response()->json(['messege' => 'request success', 'data' => $data],200);
    }

    // public function insert(Request $request){

    //     $data = customer::create($request->all());
    //     return response()->json(['messege' => 'request success', 'data' => $data],200);

    // }

    public function edit($id){
        $data = [

            "edit" => customer::where("id", $id)->first(),
            "customers" => customer::where("id", "!=" , $id)->get(),
        ];

        return response()->json(['messege' => 'request success', 'data' => $data],200);

    }

    public function update(Request $request){

       // dd($request);
        $address = customer::where("id", $request->id)->first();
        if ($address) {
            customer::where("id", $request->id)->update([
                // "name" => $request->name,
                // "phone_number" => $request->phone_number,
                "address" => $request->address,
            ]);
            return response()->json(['messege' => 'request success'],200);
        } else {
            return response()->json(['messege' => 'request error'],401);
        }
    }

    // public function destroy($id)
    // {
    //     customer::where("id", $id)->delete();

    //     return response()->json('Program deleted successfully');

    // }
    // public function index(){
    //     $data = [

    //         "customers" => customer::orderBy("id", "DESC")->get()
    //     ];
    //     // return view('/admin/pelanggan', $data);
    //     return response()->json(['messege' => 'request success', 'data' => $data],200);
    // }

    // public function delete(Request $request)
    // {
    //     customer::where("id", $request->id)->delete();

    //     return redirect('/pelanggan')->with('pesan','data berhasil di hapus');
    // }


}
