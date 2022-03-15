<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class USerController extends Controller
{
    public function index(){
        // $data = [

        //     "users" => user::orderBy("id", "DESC")->get()
        // ];
        return view('/admin/setting/profile/');
    }
    public function detail($id_anggota){
        $data = [
            "anggota" => AnggotaModel::where("id_anggota", $id_anggota)->first(),

        ];

        return view("/admin/anggota/v_detailanggota", $data);
    }
    public function kodeAnggota(){

        $select =  AnggotaModel::max('nis');
        $nis = $select;

        $noUrut = (int) substr($nis, 3,3);
        $noUrut++;
        $kode = "10";
        $hasil = $kode .sprintf("%03s", $noUrut);

        return $hasil;

    }

    public function add(){
        $data = [
            "kode" => $this->kodeAnggota(),
        ];
        return view('/admin/anggota/v_addanggota',$data);
    }

    public function insert(Request $request){

        $message = [
            'name.required' => 'wajib diisi!!',
            'email.required' => 'wajib diisi!!',
            'email.unique' => 'email ini sudah ada!!!',
            'username.required' => 'wajib diisi!!',
            'password.required' => 'wajib diisi!!',
            'password.min' => 'Min 5 Karakter',

        ];

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'username' => 'required',
            'password' => 'required|min:5|max:255',
        ], $message);


        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "username" => $request->username,
            "password" => bcrypt($request->password)
        ]);

        return redirect()->route('profile')->with('pesan','data berhasil di tambahkan');
    }

    public function edit($id){
        $data = [

            "edit" => User::where("id", $id)->first(),
            "users" => User::where("id", "!=" , $id)->get(),
            //"kategori" => KategoriModel::orderBy("nama_kategori", "DESC")->get()
        ];

        return response()->json(['messege' => 'request success', 'data' => $data],200);
        // return view("/admin/petugas/v_editpetugas", $data);
    }

}
