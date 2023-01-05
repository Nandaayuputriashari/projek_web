<?php

namespace App\Http\Controllers\Api\Android;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $validateData = $request->validate([
            'username' => 'email | required',
            'password' => 'required'
        ]);

        $data= User::where('email',$request->username)->first();
        
        if($data == null){
            return response()->json([
                "auth" => false,
                "pesan" => "akun tidak dapat ditemukan"
            ],200);
        }

        if($data->password != $request->password){
            return response()->json([
                "auth" => false,
                "pesan" => "password anda salah"
            ],200);
        }

        return response()->json([
            "auth" => true,
            "id" => $data->id_pengguna
        ],200);
    }

    public function gantiPassword(Request $request){
        $validateData = $request->validate([
            'username' => 'email | required',
            'password' => 'required',
            'newPassword' => 'required | confirmed' 
        ]);

        $data = User::where('email',$request->username)->first();

        if($data == null){
            return response()->json([
                'error' => 'akun tidak dapat ditemukan'
            ],401);
        }

        if($data->password != $request->password){
            return response()->json([
                'error' => 'password salah'
            ],401);
        }


        $data->password = $request->newPassword;
        $data->save();

        return response()->json([
            'error' => "Succes"
        ],401);
    }
}
