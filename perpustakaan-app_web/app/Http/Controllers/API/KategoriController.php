<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Models\KategoriModel;
use Facade\FlareClient\View;
use PhpParser\Builder\Function_;

class KategoriController extends Controller{

    public function index(){

        $data =[
            'kategori' => KategoriModel::orderBy("nama_kategori", "ASC")->get()
        ];
        return response()->json(['messege' => 'request success', 'data' => $data],200);
        //return view('/admin/kategori/kategori', $data);
    }

    public function insert(Request $request){

        $message = [
            "required" => "Kolom :attribute wajib diisi",
            'min' => "kolom :attribute minimal harus :min karakter",
            'max' => "kolom :attribute maximal harus :max karakter"

        ];

        $this->validate($request, [
            "nama_kategori" => "required|min:4"
        ], $message);

        $cek_double = KategoriModel::where(["nama_kategori" => $request->nama_kategori])->count();

        if ($cek_double > 0) {
            return response()->json('Tidak boleh duplicate');
            //return redirect()->back()->with("gagal", "Tidak Boleh Duplikasi Data");
        }

        KategoriModel::create($request->all());
        return response()->json(['messege' => 'request success', 'data' => $data],200);
    
        //return redirect()->route('kategori')->with('sukses','data berhasil di tambahkan');
    }

    public function edit($id_kategori){
        $data = [
            "edit" => KategoriModel::where("id_kategori", $id_kategori)->first(),
            "kategori" => KategoriModel::where("id_kategori", "!=" , $id_kategori)->get()
        ];
        if(is_null($data)){
            return response()->json('data not found', 404);
        }
        return response()->json(['messege' => 'request success', 'data' => $data],200);
        //return view("/admin/kategori/edit_kategori", $data);
    }

    public function update(Request $request)
    {
        KategoriModel::where("id_kategori", $request->id_kategori)->update([
            "nama_kategori" => $request->nama_kategori
        ]);

        //return redirect("/kategori");
        return response()->json(['messege' => 'request success', 'data' => $data],200);
    
    }

    public function hapus(Request $request)
    {
        KategoriModel::where("id_kategori", $request->id_kategori)->delete();
        return response()->json('Program deleted successfully');
        //return redirect("/kategori");
    }
}
