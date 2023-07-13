<?php 
namespace App\Repositories;
use App\Models\Detail_Sow;

class DetailSowRepository{
    protected $detail_sow;

    public function __construct(Detail_Sow $detail_sow)
    {
        $this->detail_sow=$detail_sow;
    }
}
?>