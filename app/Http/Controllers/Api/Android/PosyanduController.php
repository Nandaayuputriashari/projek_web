<?php

namespace App\Http\Controllers\Api\Android;

use App\Http\Controllers\Controller;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    public function view(Request $request){
        $validateData = $request->validate([
            'id' => 'required'
        ]);

        $data = Posyandu::where('id_posyandu',$request->id)->first();

        if($data == null){
            return response()->json([
                "pesan" => "data tidak dapat ditemukan"
            ],200);
        }

        return response()->json([
            "id" => $data->id_posyandu,
            "nama" => $data->nama,
            "alamat" => $data->alamat,
            "jadwal" => $data->jadwal
        ],200);
    }

    public function viewAll(){
        $data = Posyandu::all();

        return response()->json([
            "data" => $data
        ],200);
    }
}
