<?php

namespace App\Http\Controllers\Api\Android;

use App\Http\Controllers\Controller;
use App\Models\Penimbangan;
use Illuminate\Http\Request;

class PenimbanganController extends Controller
{
    public function add(Request $request){
        $validateData = $request->validate([
            'id_bayi' => 'required',
            'id_posyandu' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'posisi' => 'required',
        ]);

        $data = new Penimbangan();
        $data->bayi_id = $request->id_bayi;
        $data->posyandu_id = $request->id_posyandu;
        $data->tinggi_badan = $request->tinggi;
        $data->berat_badan = $request->berat;
        $data->posisi = $request->posisi;
        $data->umur = $request->umur;
        $data->tanggal_pemeriksaan = now();
        $data->save();
    }

    public function viewAll(){
        $data = Penimbangan::all();

        return response()->json([
            "data" => $data
        ],200);
    }
}
