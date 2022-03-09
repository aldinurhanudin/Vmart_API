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
}
