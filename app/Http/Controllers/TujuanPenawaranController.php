<?php

namespace App\Http\Controllers;

use App\Services\TujuanPenawaranService;
use App\Models\Tujuan_Penawaran;
use Exception;
use Illuminate\Http\Request;

class TujuanPenawaranController extends Controller
{
    protected $TujuanPenawaranService;

    //construct Tujuan penawaran service
    public function __construct(TujuanPenawaranService $TujuanPenawaranService)
    {
        $this->TujuanPenawaranService=$TujuanPenawaranService;
    }


    //BAGIAN READ
    //index tampilin semua data
    public function index(){
        $result =['status' => 200];
        try {
            $result['data']= $this->TujuanPenawaranService->getAll();
        }catch (Exception $e){
            $result =[
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        return view('form.index',[
            'result'=>$result['data'],
        ]);
    }

    //get all tapi by id

    public function show($id_tujuan){
        $result =['status' => 200];
        try{
            $result['data'] = $this->TujuanPenawaranService->getByid($id_tujuan);
        }catch (Exception $e){
            $result =[
                'status'=>500,
                'error'=>$e->getMessage()
            ];
        }
        return view('form.update',[
            'result'=>$result['data']
        ]);
    }



    //BAGIAN CUD
    //store
    public function store(Request $request){
        $data=$request->only([
            'id_tujuan','nama_perusahaan','alamat','email','no_telepon','pic'
        ]);

        $result = ['status'=>200];

        try{
            $result['data'] = $this->TujuanPenawaranService->saveData($data);
        }catch (Exception $e){
            $result =[
                'status'=> 500,
                'error' => $e->getMessage()
            ];
        }
        return view('form.Create',$result)->with('success','berhasil menambahkan data');   
    }

    public function update(Request $request,$id_tujuan){
        $data =$request->only([
            'nama_perusahaan',
            'alamat',
            'email',
            'no_telepon',
            'pic']
        );
        $result =['status' =>200];

        try{
            $result['data']=$this->TujuanPenawaranService->updateTujuan($data,$id_tujuan);
        }catch (Exception $e){
            $result =[
                'status' => 500,
                'error'=> $e->getMessage()
            ];
        }
        return view('form.Create',$result)->with('success','berhasil menambahkan data');   

    }

    public function destroy($id)
    {
        $result =['status'=>200];

        try{
            $result['data']=$this->TujuanPenawaranService->deleteById_tujuan($id);

        }catch(Exception $e){
            $result=[
                'status'=>500,
                'error'=>$e->getMessage()
            ];
        }
        
        return redirect('form.index');
    }
}
