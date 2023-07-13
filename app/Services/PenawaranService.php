<?php
// File: app/Services/TujuanPenawaranService.php

namespace App\Services;

use App\Repositories\PenawaranRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Spatie\FlareClient\Http\Exceptions\InvalidData;

class PenawaranService
{
    protected $Penawaran;

    public function __construct(PenawaranRepository $penawaran)
    {
        $this->Penawaran = $penawaran;
    }

    public function saveData($data)
    {
        $validator = Validator::make($data, [
            'tgl_penawaran'=>'required',
            'id_perusahaan_tujuan' =>'required',
            'lampiran'=>'required',
            'deskripsi'=>'required',
            'jenis_penawaran'=>'required'
        ]);
        

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->Penawaran->savePenawaran($data);

        return $result;
    }

    public function getAll(){
        return $this->Penawaran->getAllpenawaran();
    }
    public function getByid($id_penawaran){
        return $this->Penawaran->ambilById($id_penawaran);
    }
    public function updatePenawaran($data,$id_penawaran){
        $validator = Validator::make($data,[
            'id_penawaran'=>'required',
            'tgl_penawaran'=>'required',
            'id_perusahaan_tujuan' =>'required',
            'lampiran'=>'required',
            'deskripsi'=>'required',
            'jenis_penawaran'=>'required'

        ]);
        if ($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }
        DB::beginTransaction();

        try{
            $penawaran =$this->Penawaran->update($data,$id_penawaran);
        }catch (Exception $e){
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Gagal mengedit data Penawaran');
        }
        DB::commit();
        return $penawaran;
    }
    public function deleteById_tujuan($id_penawaran){
        DB::beginTransaction();

        try {
            $penawaran =$this->Penawaran->delete($id_penawaran);
        }catch (Exception $e){
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Tidak bisa menghapus data Penawaran');
        }

        DB::commit();
        return $penawaran;
    }
}

?>