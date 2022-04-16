<?php

namespace App\Http\Controllers\API;
use App\Models\product;
use App\Models\product_category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index(){

        $data = product::all();

        // return view('/admin/produk/produk', $data);
        return response()->json(['messege' => 'request success', 'data'=>$data],200);
    }

    public function sku(){

        $select =  product::max('sku');
        $sku = $select;

        $noUrut = (int) substr($sku, 3,3);
        $noUrut++;
        $kode = "KB-";
        $hasil = $kode . sprintf("%03s", $noUrut);

        return $hasil;

    }
    public function add(){
        // dd($this->sku());
        $data= [
            "kode" => $this->sku(),
            "kategori" => product_category::orderBy("name", "DESC")->get()
        ];
        // return view('/admin/produk/tambah_produk', $data);
        return response()->json(['messege' => 'request success', 'data' => $data],200);
    }

    public function edit($id){
        $data = [
            "edit" => product::where("id", $id)->first(),
            "kategori" => product_category::orderBy("name", "DESC")->get()

        ];

        // return view("/admin/produk/edit_produk", $data);
        return response()->json(['messege' => 'request success', 'data' => $data['edit']],200);
    }
    public function insert(Request $request){




        $data = product::create($request->all());
        return response()->json(['messege' => 'request success', 'data' => $data],200);
        //return redirect('/produk')->with('pesan','data berhasil di tambahkan');
    }

    public function update(Request $request, $id)
    {

        $product = product::find($id);
        $product->update($request->all());


        return response()->json(['messege' => 'request success', 'data' => $product],200);
    }
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();


        return response()->json(['messege' => 'request success', 'data' => null],200);
    }
}
