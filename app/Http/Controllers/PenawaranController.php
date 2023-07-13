<?php

namespace App\Http\Controllers;

use App\Services\PenawaranService;
use App\Models\Penawaran;
use Exception;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    protected $PenawaranService;

    //construct Tujuan penawaran service
    public function __construct(PenawaranService $PenawaranService)
    {
        $this->PenawaranService=$PenawaranService;
    }


    //BAGIAN READ
    //index tampilin semua data
    public function index(){
        $result =['status' => 200];
        try {
            $result['data']= $this->PenawaranService->getAll();
        }catch (Exception $e){
            $result =[
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        
        return response()->json($result,$result['status']);

    }

    //get all tapi by id

    public function show($id_penawaran){
        $result =['status' => 200];
        try{
            $result['data'] = $this->PenawaranService->getByid($id_penawaran);
        }catch (Exception $e){
            $result =[
                'status'=>500,
                'error'=>$e->getMessage()
            ];
        }
        return response()->json($result,$result['status']);
    }



    //BAGIAN CUD
    //store
    public function store(Request $request){
        $data=$request->only([
            'id_penawaran','tgl_penawaran','id_perusahaan_tujuan','lampiran','deskripsi','jenis_penawaran'
        ]);

        $result = ['status'=>200];

        try{
            $result['data'] = $this->PenawaranService->saveData($data);
        }catch (Exception $e){
            $result =[
                'status'=> 500,
                'error' => $e->getMessage()
            ];
        }
        return response()->json($result,$result['status']);
    }

    public function update(Request $request,$id_penawaran){
        $data =$request->only(['id_penawaran','tgl_penawaran','id_perusahaan_tujuan','lampiran','deskripsi','jenis_penawaran']
        );
        $result =['status' =>200];

        try{
            $result['data']=$this->PenawaranService->updatePenawaran($data,$id_penawaran);
        }catch (Exception $e){
            $result =[
                'status' => 500,
                'error'=> $e->getMessage()
            ];
        }
        return response()->json($result, $result['status']);

    }
    public function destroy($id)
    {
        $result =['status'=>200];

        try{
            $result['data']=$this->PenawaranService->deleteById_tujuan($id);

        }catch(Exception $e){
            $result=[
                'status'=>500,
                'error'=>$e->getMessage()
            ];
        }
        
        return response()->json($result, $result['status']);
    }
}
