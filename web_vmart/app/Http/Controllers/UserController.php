<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class USerController extends Controller
{
    public function index(){
        $data = [

            "users" => user::orderBy("id", "DESC")->get()
        ];
        return view('/admin/', $data);
    }
}
