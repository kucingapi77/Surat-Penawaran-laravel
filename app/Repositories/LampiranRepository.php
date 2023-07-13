<?php 
namespace App\Repositories;
use App\Models\Lampiran;

class LampiranRepository{
    protected $lampiran;

    public function __construct(Lampiran $lampiran)
    {
        $this->lampiran=$lampiran;
    }
}
?>