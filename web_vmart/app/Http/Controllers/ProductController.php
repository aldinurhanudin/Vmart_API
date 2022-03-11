<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index(){
        $data = [

            "products" => product::orderBy("id", "DESC")->get()
        ];
        return view('/admin/produk/produk', $data);
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
            "kode" => $this->sku()
        ];
        return view('/admin/produk/tambah_produk', $data);
    }

    public function edit($id){
        $data = [
            "edit" => product::where("id", $id)->first()

        ];

        return view("/admin/produk/edit_produk", $data);
    }
    public function insert(Request $request){

        $message = [
        // 'kode_buku.required' => 'wajib diisi!!',
        // 'kode_buku.unique' => 'kode buku ini sudah ada!!!',
        // 'kode_buku.min' => 'Min 4 Karakter',
        // 'kode_buku.max' => 'Max 7 Karakter',
        'sku.required' => 'wajib diisi!!',
        'category_id.required' => 'wajib diisi!!',
        'name.required' => 'wajib diisi!!',
        'picture_name.required' => 'wajib diisi!!',
        'price.required' => 'wajib diisi!!',
        'stock.required' => 'wajib diisi!!',

        ];

        $validateData = $this->validate($request, [
            'sku' => 'required',
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'picture_name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            //'foto' => 'required',
        ], $message);

        // $validateData['description'] = $request->description; //kalo ga mau di validatev

        if ($request->file("picture_name")) {

            $validateData['picture_name'] = $request->file("picture_name")->store("image");

        }

        // $cek_double = BukuModel::where(["nama_kategori" => $request->nama_kategori])->count();

        // if ($cek_double > 0) {
        //     return redirect()->back()->with("gagal", "Tidak Boleh Duplikasi Data");
        // }

        product::create($validateData);

        return redirect('admin/produk/produk')->with('pesan','data berhasil di tambahkan');
    }
}
