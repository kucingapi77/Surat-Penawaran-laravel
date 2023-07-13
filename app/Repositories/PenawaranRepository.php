<?php 
namespace App\Repositories;
use App\Models\Penawaran;
use Exception;
use Illuminate\Support\Str;

class PenawaranRepository{
    protected $penawaran;

    public function __construct(Penawaran $penawaran)
    {
        $this->penawaran=$penawaran;
    }

    public function savePenawaran($data){
        $penawaran = new $this->penawaran;

        $penawaran->id_penawaran=Str::uuid()->toString();
        $penawaran->tgl_penawaran=$data['tgl_penawaran'];
        $penawaran->id_perusahaan_tujuan=$data['id_perusahaan_tujuan'];
        $penawaran->lampiran=$data['lampiran'];
        $penawaran->deskripsi=$data['deskripsi'];
        $penawaran->jenis_penawaran=$data['jenis_penawaran'];

        $penawaran->save();

        return $penawaran->fresh();
    }
    public function getAllpenawaran(){
        return $this->penawaran
            ->get();
        
    }
    public function ambilById($id_penawaran){
        return $this->penawaran
            ->where('id_tujuan',$id_penawaran)
            ->get();
    }

    public function update($data,$id_penawaran)
    {
        $penawaran=$this->penawaran->find($id_penawaran);
        $penawaran->tgl_penawaran=$data['tgl_penawaran'];
        $penawaran->id_perusahaan_tujuan=$data['id_perusahaan_tujuan'];
        $penawaran->lampiran=$data['lampiran'];
        $penawaran->deskripsi=$data['deskripsi'];
        $penawaran->jenis_penawaran=$data['jenis_penawaran'];
 
        $penawaran->update();
        return $penawaran;
    }

    public function delete($id_penawaran){
        $penawaran =$this->penawaran->find($id_penawaran);
        $penawaran->delete();

        return $penawaran;
    }
}
?>