<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bayi;
use Illuminate\Http\Request;

class BayiController extends Controller
{
    public function BayiView(){
        // $allDataUser=User::all();
        $data['allDataBayi']=Bayi::all();
        return view('backend.bayi.view_bayi',$data);
    }

    public function BayiAdd(){
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        return view('backend.bayi.add_bayi');
    }

    public function BayiStore(Request $request){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=new Bayi();
        $data->id_bayi=$request->nik;
        $data->name_bayi=$request->nama;
        $data->nik_ibu=$request->nik_ibu;
        $data->name_ibu=$request->nama_ibu;
        $data->tgl_lahir=$request->tgl_lahir;
        $data->save();

        return redirect()->route('bayi.view')->with('info','Tambah user berhasil');
    }

    public function BayiEdit($id){
        $editData= Bayi::find($id);
        return view('backend.bayi.edit_bayi', compact('editData'));
    }

    public function BayiUpdate(Request $request, $id){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=Bayi::find($id);
        $data->id_bayi=$request->nik;
        $data->name_bayi=$request->nama;
        $data->nik_ibu=$request->nik_ibu;
        $data->name_ibu=$request->nama_ibu;
        $data->tgl_lahir=$request->tgl_lahir;
        $data->save();

        return redirect()->route('bayi.view')->with('info','Update user berhasil');
    }

    public function BayiDelete($id){
        $deleteData= Bayi::find($id);
        $deleteData->delete();


        return redirect()->route('bayi.view')->with('info','Delete user berhasil');
    }
}
