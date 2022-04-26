<?php

namespace App\Http\Controllers\API;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
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
