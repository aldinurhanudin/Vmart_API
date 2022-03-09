<?php

namespace App\Http\Controllers;
use App\Models\product_category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProductCategoryController extends Controller
{
    public function index(){
        $data = [

            "product_category" => product_category::orderBy("id", "DESC")->get()
        ];
        return view('/admin/kategori', $data);
    }
}
