<?php 
namespace App\Repositories;
use App\Models\Tujuan_Penawaran;
use Exception;
use Illuminate\Support\Str;

class TujuanPenawaranRepository{
    protected $tujuan_penawaran;

    public function __construct(Tujuan_Penawaran $tujuan_Penawaran)
    {
        $this->tujuan_penawaran=$tujuan_Penawaran;
    }

    public function savePenawaran($data){
        $tujuanpenawaran = new $this->tujuan_penawaran;

        $tujuanpenawaran->id_tujuan=Str::uuid()->toString();
        $tujuanpenawaran->nama_perusahaan=$data['nama_perusahaan'];
        $tujuanpenawaran->alamat=$data['alamat'];
        $tujuanpenawaran->email=$data['email'];
        $tujuanpenawaran->no_telepon=$data['no_telepon'];
        $tujuanpenawaran->pic=$data['pic'];

        $tujuanpenawaran->save();

        return $tujuanpenawaran->fresh();
    }
    public function getAllTujuan(){
        return $this->tujuan_penawaran
            ->get();
        
    }
    public function ambilById($id_tujuan){
        return $this->tujuan_penawaran
            ->where('id_tujuan',$id_tujuan)
            ->get();
    }

    public function update($data,$id_tujuan)
    {
        $tujuan=$this->tujuan_penawaran->find($id_tujuan);
        $tujuan->nama_perusahaan=$data['nama_perusahaan'];
        $tujuan->alamat=$data['alamat'];
        $tujuan->email=$data['email'];
        $tujuan->no_telepon=$data['no_telepon'];
        $tujuan->pic=$data['pic'];

        $tujuan->update();

        return $tujuan;
    }
    
    public function delete($id_tujuan){
        $tujuan =$this->tujuan_penawaran->find($id_tujuan);
        $tujuan->delete();

        return $tujuan;
    }
}
?>