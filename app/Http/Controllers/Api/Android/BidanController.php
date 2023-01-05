<?php

namespace App\Http\Controllers\Api\Android;

use App\Http\Controllers\Controller;
use App\Models\Bidan;
use Illuminate\Http\Request;

class BidanController extends Controller
{
    public function view(Request $request){
        $validateData = $request->validate([
            'id' => 'required'
        ]);

        $data = Bidan::where('id_bidan',$request->id)->first();

        if($data == null){
            return response()->json([
                "pesan" => "data tidak dapat ditemukan"
            ],200);
        }

        return response()->json([
            "id" => $data->id_bidan,
            "nama" => $data->nama,
            "nip" => $data->nip,
            "id_posyandu" => $data->id_posyandu
        ],200);
    }
}
