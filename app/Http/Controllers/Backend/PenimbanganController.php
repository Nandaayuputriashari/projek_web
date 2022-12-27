<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Penimbangan;
use Illuminate\Http\Request;

class PenimbanganController extends Controller
{
    public function PenimbanganView(){
        //$allDataUser=User::all();
        $data['allDataPenimbangan']=Penimbangan::all();
        return view('backend.penimbangan.view_penimbangan', $data);
    }
    public function PenimbanganAdd(){
        //$allDataUser=User::all();
        //$data['allDataUser']=user::all();
        return view('backend.penimbangan.add_penimbangan');
    }

    public function PenimbanganStore(Request $request){

        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=new Penimbangan();
        $data->id_penimbangan=$request->id_penimbangan;
        $data->bayi_id=$request->bayi_id;
        $data->posyandu_id=$request->posyandu_id;
        $data->tinggi_badan=$request->tinggi_badan;
        $data->berat_badan=$request->berat_badan;
        $data->posisi=$request->posisi;
        $data->umur=$request->umur;
        $data->tanggal_pemeriksaan=$request->tanggal_pemeriksaan;
        $data->save();

        return redirect()->route('penimbangan.view')->with('info','Tambah data bayi berhasil');
    }

    public function PenimbanganEdit($id){
        // dd('berhasil masuk controller user edit');
        $editData= Penimbangan::find($id);
        return view('backend.penimbangan.edit_penimbangan', compact('editData'));
     }
 
     public function PenimbanganUpdate(Request $request, $id){
 
        //  $validatedData=$request->validate([
        //      'email' =>'required|unique:users',
        //      'textNama' =>'required',
        //  ]);
 
        $data=Penimbangan::find($id);
        $data->id_penimbangan=$request->id_penimbangan;
        $data->bayi_id=$request->bayi_id;
        $data->posyandu_id=$request->posyandu_id;
        $data->tinggi_badan=$request->tinggi_badan;
        $data->berat_badan=$request->berat_badan;
        $data->posisi=$request->posisi;
        $data->umur=$request->umur;
        $data->tanggal_pemeriksaan=$request->tanggal_pemeriksaan;
        $data->save();
         // if($request->password!=""){
         //     $data->password=bcrypt($request->password);
         // }
 
 
         return redirect()->route('penimbangan.view')->with('info','Update data berhasil');
    }

    public function PenimbanganDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteData= Penimbangan::find($id);
        $deleteData->delete();

        return redirect()->route('penimbangan.view')->with('info','Delete data berhasil');
    }
}
