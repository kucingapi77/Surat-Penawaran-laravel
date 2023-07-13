<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\KopSuratService;
use App\Models\Kop_Surat;
use Exception;


class KopSuratController extends Controller
{
    protected $KopSurat;

    //construct Tujuan penawaran service
    public function __construct(KopSuratService $kop_surat)
    {
        $this->KopSurat=$kop_surat;
    }


    //BAGIAN READ
    //index tampilin semua data
    public function index(){
        $result =['status' => 200];
        try {
            $result['data']= $this->KopSurat->getAll();
        }catch (Exception $e){
            $result =[
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        return response()->json($result, $result['status']);
    }

    //get all tapi by id

    public function show($id_kop_surat){
        $result =['status' => 200];
        try{
            $result['data'] = $this->KopSurat->getByid($id_kop_surat);
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
            'id_kop_surat','id_penawaran','nomor_surat','lampiran','perihal'
        ]);

        $result = ['status'=>200];

        try{
            $result['data'] = $this->KopSurat->saveData($data);
        }catch (Exception $e){
            $result =[
                'status'=> 500,
                'error' => $e->getMessage()
            ];
        }
        return response()->json($result,$result['status']);
    }

    public function update(Request $request,$id_kop_surat){
        $data =$request->only([
            'id_kop_surat','id_penawaran','nomor_surat','lampiran','perihal'
            ]
        );
        $result =['status' =>200];

        try{
            $result['data']=$this->KopSurat->updateTujuan($data,$id_kop_surat);
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
            $result['data']=$this->KopSurat->deleteById_tujuan($id);

        }catch(Exception $e){
            $result=[
                'status'=>500,
                'error'=>$e->getMessage()
            ];
        }
        
        return response()->json($result, $result['status']);
    }
}
