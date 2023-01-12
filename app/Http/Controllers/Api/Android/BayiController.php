<?php

namespace App\Http\Controllers\Api\Android;

use App\Http\Controllers\Controller;
use App\Models\Bayi;
use Illuminate\Http\Request;

class BayiController extends Controller
{
    public function view(Request $request){
        $validateData = $request->validate([
            'id' => 'required'
        ]);

        $data = Bayi::where('id_bayi',$request->id)->first();

        if($data == null){
            return response()->json([
                "pesan" => "data tidak dapat ditemukan"
            ],200);
        }

        return response()->json([
            "id_bayi" => $data->id_bayi,
            "id_posyandu" => $data->id_posyandu,
            "name_bayi" => $data->name_bayi,
            "nik_ibu" => $data->nik_ibu,
            "name_ibu" => $data->name_ibu,
            "tgl_lahir" => $data->tgl_lahir,
            "jenis_kel" => $data->jenis_kel,
            "rt" => $data->rt,
            "rw" => $data->rw
        ],200);
    }

    public function viewAll(){
        $data = Bayi::all();

        return response()->json([
            "data" => $data
        ],200);
    }

    public function viewLimitAll(Request $request){
        $validateData = $request->validate([
            'id' => 'required'
        ]);

        $data = Bayi::where('id_posyandu', $request->id)->get();
        
        if($data == null){
            return response()->json([
                "pesan" => "data tidak dapat ditemukan"
            ],200);
        }
        
        return response()->json([
            "data" => $data
        ],200);
    }
}
