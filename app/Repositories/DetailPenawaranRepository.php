<?php 
namespace App\Repositories;
use App\Models\Detail_Penawaran;

class DetailPenawaranRepository{
    protected $detail_penawaran;

    public function __construct(Detail_Penawaran $detail_penawaran)
    {
        $this->detail_penawaran=$detail_penawaran   ;
    }
}
?>