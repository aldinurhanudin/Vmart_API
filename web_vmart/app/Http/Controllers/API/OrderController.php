<?php

namespace App\Http\Controllers\API;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{


    public function read(){

        $data = order::select('delivery_data')->get();


        return response()->json(['messege' => 'request success', 'data'=>$data],200);
    }

    public function detail(){
        $data = [
            "pesanan" => order::select('delivery_data')->get(),

        ];

        //return view("/admin/anggota/v_detailanggota", $data);
        return response()->json(['messege' => 'request success', 'data' => $data],200);
    }

    public function create(Request $request){

        $data = order::create($request->select('delivery_data')->get());
        return response()->json(['messege' => 'request success', 'data' => $data],200);

    }

    public function editt($id){
        $data = [

            "edit" => order::where("id", $id)->first(),
            "orders" => order::where("id", "!=" , $id)->get(),
        ];

        return response()->json(['messege' => 'request success', 'data' => $data],200);

    }

    public function updates(Request $request){

        customer::where("id", $request->id)->update([
            // "name" => $request->name,
            // "phone_number" => $request->phone_number,
            "delivery_data" => $request->address,


        ]);

        return response()->json(['messege' => 'request success'],200);

    }

    public function hapus($id)
    {
        order::where("id", $id)->delete();

        return response()->json('Program deleted successfully');

    }
    public function index(){

        $data = order::all();


        return response()->json(['messege' => 'request success', 'data'=>$data],200);
    }


    public function insert(Request $request){




        $data = order::create($request->all());
        return response()->json(['messege' => 'request success', 'data' => $data],200);

    }

    public function update(Request $request, $id)
    {

        $order = order::find($id);
        $order->update($request->all());


        return response()->json(['messege' => 'request success', 'data' => $order],200);
    }
    public function destroy($id)
    {
        $order = order::find($id);
        $order->delete();


        return response()->json(['messege' => 'request success', 'data' => null],200);
    }


}
