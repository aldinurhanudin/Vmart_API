<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index(){

        $data = order_item::all();


        return response()->json(['messege' => 'request success', 'data'=>$data],200);
    }

    public function insert(Request $request){




        $data = order_item::create($request->all());
        return response()->json(['messege' => 'request success', 'data' => $data],200);

    }

    public function update(Request $request, $id)
    {

        $order_item = order_item::find($id);
        $order_item->update($request->all());


        return response()->json(['messege' => 'request success', 'data' => $order_item],200);
    }
    public function destroy($id)
    {
        $order_item = order_item::find($id);
        $order_item->delete();


        return response()->json(['messege' => 'request success', 'data' => null],200);
    }

}
