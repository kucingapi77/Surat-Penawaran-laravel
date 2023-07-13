<?php
// File: app/Services/TujuanPenawaranService.php

namespace App\Services;

use App\Repositories\KopSuratRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Spatie\FlareClient\Http\Exceptions\InvalidData;

class KopSuratService
{
    protected $Kop_Surat;

    public function __construct(KopSuratRepository $kop_surat)
    {
        $this->Kop_Surat = $kop_surat;
    }

    public function saveData($data)
    {
        $validator = Validator::make($data, [
            'id_penawaran'=>'required',
            'nomor_surat'=>'required',
            'lampiran'=>'required',
            'perihal'=>'required'
        ]);
        

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->Kop_Surat->savePenawaran($data);

        return $result;
    }

    public function getAll(){
        return $this->Kop_Surat->getAllkop();
    }
    public function getByid($id_kop_surat){
        return $this->Kop_Surat->ambilById($id_kop_surat);
    }
    public function updateTujuan($data,$id_kop_surat){
        $validator = Validator::make($data,[
            'id_penawaran'=>'required',
            'nomor_surat'=>'required',
            'lampiran'=>'required',
            'perihal'=>'required'   
        ]);
        if ($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }
        DB::beginTransaction();

        try{
            $kopsurat =$this->Kop_Surat->update($data,$id_kop_surat);
        }catch (Exception $e){
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException($e->getMessage());
        }
        DB::commit();
        return $kopsurat;
    }
    public function deleteById_tujuan($id_kop_surat){
        DB::beginTransaction();

        try {
            $kopsurat =$this->Kop_Surat->delete($id_kop_surat);
        }catch (Exception $e){
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Tidak bisa menghapus data Kop Surat');
        }

        DB::commit();
        return $kopsurat;
    }
}

?>