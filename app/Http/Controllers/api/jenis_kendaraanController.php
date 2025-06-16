<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\jenis_kendaraan;
use Illuminate\Http\Request;

class jenis_kendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jenis_kendaraan::get();
        return response()->json([
            'status'=>true,
            'pesan'=>'Data ditemukan',
            'data'=>$data,
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new jenis_kendaraan();

        $data->id_jenis_kendaraan = $request->idjeniskendaraan;
        $data->nama_jenis_kendaraan = $request->namajeniskendaraan;

        $post = $data->save();
        return response()->json([
            'status'=>true,
            'pesan'=>'Data ditambahkan',
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = jenis_kendaraan::where('id_jenis_kendaraan','=',$id)->get();
        if($data){
            return response()->json([
                'status'=>true,
                'pesan'=>'Data Ditemukan',
                'data'=>$data,
            ], 200);
        }else{
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ], 400);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = jenis_kendaraan::where('id_jenis_kendaraan','=',$id)->get();
        if(empty($data)){
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak Ditemukan',
            ],404);
        }
        $dataupdate = jenis_kendaraan::where('id_jenis_kendaraan','=',$id);
        $dataupdate->update([
            'id_jenis_kendaraan'=> $request->idjeniskendaraan,
            'nama_jenis_kendaraan'=> $request->namajeniskendaraan,
        ]);
        return response()->json([
            'status'=>true,
            'pesan'=>'Data Berhasil Diupdate',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = jenis_kendaraan::where('id_jenis_kendaraan','=',$id)->get();
        if(empty($data)){
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak Ditemukan',
            ],404);
        }
        $data = jenis_kendaraan::where('id_jenis_kendaraan','=',$id);
        $data->delete();

        return response()->json([
            'status'=>true,
            'pesan'=>'Data Berhasil Dihapus',
        ]);
    }
}
