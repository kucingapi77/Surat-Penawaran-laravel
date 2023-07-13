<?php 
namespace App\Repositories;
use App\Models\Kop_Surat;
use Exception;
use Illuminate\Support\Str;

class KopSuratRepository{
    protected $kop_surat;

    public function __construct(Kop_Surat $kop_surat)
    {
        $this->kop_surat=$kop_surat;
    }
    public function savePenawaran($data){
        $kopsurat = new $this->kop_surat;

        $kopsurat->id_kop_surat=Str::uuid()->toString();
        $kopsurat->id_penawaran=$data['id_penawaran'];
        $kopsurat->nomor_surat=$data['nomor_surat'];
        $kopsurat->lampiran=$data['lampiran'];
        $kopsurat->perihal=$data['perihal'];

        $kopsurat->save();

        return $kopsurat->fresh();
    }
    public function getAllkop(){
        return $this->kop_surat
            ->get();
        
    }
    public function ambilById($id_kop_surat){
        return $this->kop_surat
            ->where('id_kop_surat',$id_kop_surat)
            ->get();
    }

    public function update($data,$id_kop_surat)
    {
        $kopsurat=$this->kop_surat->find($id_kop_surat);
        $kopsurat->id_penawaran=$data['id_penawaran'];
        $kopsurat->nomor_surat=$data['nomor_surat'];
        $kopsurat->lampiran=$data['lampiran'];
        $kopsurat->perihal=$data['perihal'];


        $kopsurat->update();

        return $kopsurat;
    }
    
    public function delete($id_kop_surat){
        $kopsurat =$this->kop_surat->find($id_kop_surat);
        $kopsurat->delete();

        return $kopsurat;
    }
}
?>