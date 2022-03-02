<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
class RoleController extends Controller
{
    public function index(){

        $data = [

            "roles" => Role::orderBy("nama")->get()
        ];
        return response()->json(['messege' => 'request success', 'data' => $data],200);
        //return view('/admin/role/role', $data);
    }

    public function add(){
        $data = [
            "roles" => Role::orderBy("nama", "DESC")->get()
        ];
        return response()->json(['messege' => 'request success', 'data' => $data],200);
        //return view('/admin/role/addrole', $data);
    }

    public function insert(Request $request){

        $message = [
            "required" => "Kolom :attribute wajib diisi",
            'min' => "kolom :attribute minimal harus :min karakter",
            'max' => "kolom :attribute maximal harus :max karakter"

        ];

        $this->validate($request, [
            "nama" => "required|min:4"
        ], $message);

        $cek_double = Role::where(["nama" => $request->nama])->count();

        if ($cek_double > 0) {
            return response()->json("Tidak Boleh Duplikasi Data");
        }

        Role::create($request->all());
        return response()->json(['messege' => 'request success', 'data' => $request],200);
        //return redirect()->with('sukses','data berhasil di tambahkan');
    }

    public function edit($id_role){
        $data = [
            "edit" => Role::where("id_role", $id_role)->first(),
            "roles" => Role::where("id_role", "!=" , $id_role)->get()
        ];
        if(is_null($data)){
            return response()->json('data not found', 404);
        }
        return response()->json(['messege' => 'request success', 'data' => $data],200);
        //return response()->json(['messege' => 'request success', 'data' => $request],200);
        //return view("/admin/role/editrole", $data);
    }

    public function update(Request $request)
    {
        Role::where("id_role", $request->id_role)->update([
            "nama" => $request->nama,
        ]);
        return response()->json(['messege' => 'request success', 'data' => $request],200);
        //return redirect("/role");
    }

    public function hapus(Request $request)
    {
        ROle::where("id_role", $request->id_role)->delete();
        return response()->json(['messege' => 'request success', 'data' => $request],200);
        //return redirect("/role");
    }
}
