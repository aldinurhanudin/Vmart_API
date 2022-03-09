<?php

namespace App\Http\Controllers;
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
        return view('/admin/pelanggan', $data);
    }

}
