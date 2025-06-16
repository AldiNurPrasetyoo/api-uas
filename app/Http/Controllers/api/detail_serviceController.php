<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\detail_service;
use Illuminate\Http\Request;

class detail_serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = detail_service::get();
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
        $data = new detail_service();

        $data->id_detail_service = $request->id_detail_service;
        $data->sparepart = $request->sparepart;
        $data->harga = $request->harga;

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
        $data = detail_service::where('id_detail_service','=',$id)->get();
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
        $data = detail_service::where('id_detail_service','=',$id)->get();
        if(empty($data)){
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak Ditemukan',
            ],404);
        }
        $dataupdate = detail_service::where('id_detail_service','=',$id);
        $dataupdate->update([
            'id_detail_service'=> $request->id_detail_service,
            'sparepart'=> $request->sparepart,
            'harga'=> $request->harga,
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
        $data = detail_service::where('id_detail_service','=',$id)->get();
        if(empty($data)){
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak Ditemukan',
            ],404);
        }
        $data = detail_service::where('id_detail_service','=',$id);
        $data->delete();

        return response()->json([
            'status'=>true,
            'pesan'=>'Data Berhasil Dihapus',
        ]);
    }
}
