<?php
// File: app/Services/TujuanPenawaranService.php

namespace App\Services;

use App\Repositories\TujuanPenawaranRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Spatie\FlareClient\Http\Exceptions\InvalidData;

class TujuanPenawaranService
{
    protected $tujuan_Penawaran;

    public function __construct(TujuanPenawaranRepository $tujuan_penawaran)
    {
        $this->tujuan_Penawaran = $tujuan_penawaran;
    }

    public function saveData($data)
    {
        $validator = Validator::make($data, [
            
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'pic' => 'required',
        ]);
        

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->tujuan_Penawaran->savePenawaran($data);

        return $result;
    }

    public function getAll(){
        return $this->tujuan_Penawaran->getAllTujuan();
    }
    public function getByid($id_tujuan){
        return $this->tujuan_Penawaran->ambilById($id_tujuan);
    }
    public function updateTujuan($data,$id_tujuan){
        $validator = Validator::make($data,[
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'pic' => 'required'
        ]);
        if ($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }
        DB::beginTransaction();

        try{
            $tujuan =$this->tujuan_Penawaran->update($data,$id_tujuan);
        }catch (Exception $e){
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException($e->getMessage());
        }
        DB::commit();
        return $tujuan;
    }
    public function deleteById_tujuan($id_tujuan){
        DB::beginTransaction();

        try {
            $tujuan =$this->tujuan_Penawaran->delete($id_tujuan);
        }catch (Exception $e){
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Tidak bisa menghapus data Tujuan Penawaran');
        }

        DB::commit();
        return $tujuan;
    }
    
}

?>