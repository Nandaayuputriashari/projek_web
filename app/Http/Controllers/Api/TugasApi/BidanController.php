<?php

namespace App\Http\Controllers\Api\TugasApi;

use App\Http\Controllers\Controller;
use App\Models\Bidan;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class BidanController extends Controller
{
    public function create(Request $request){
        $validateData = $request->validate([
            'nama' => 'required | max:45',
            'nip' => 'required | unique:bidans',
            'nama_posyandu' => 'required'
        ]);

        $foreignKey= Posyandu::where('nama',$request->nama_posyandu)->first();
        $data=new Bidan();
        $data->nama = $request->nama;
        $data->nip = $request->nip;
        $data->id_posyandu = $foreignKey->id;
        $data->save();
        $data->namaPosyandu = $request->nama_posyandu;

        return response()->json($data, 201);
    }

    public function update(Request $request){
        $validateData = $request->validate([
            'nama' => 'required | max:45',
            'nip' => 'required',
            'nama_posyandu' => 'required'
        ]);

        $foreignKey= Posyandu::where('nama',$request->nama_posyandu)->first();
       $data=Bidan::where('nip',$request->nip)->first();
       $data->nama = $request->nama;
       $data->id_posyandu = $foreignKey->id;
       $data->save();
       $data->namaPosyandu = $request->nama_posyandu;

       return response()->json($data);
    }

    public function read(){
        $bidan=Bidan::all();
        // $posyandu=Posyandu::all();
        return response()->json($bidan,200);
    }

    public function delete(Request $request){
        $validateData = $request->validate([
            'nip' => 'required'
        ]);
        $deleteData = Bidan::where('nip',$request->nip)->first();
        $deleteData->delete();

        $data['alldata']=Bidan::all();
        return response()->json($data,200);
    }


}
