<?php 
namespace App\Repositories;
use App\Models\Item_Detail_Sow;

class ItemDetailSowRepository{
    protected $item_detail_sow;

    public function __construct(Item_Detail_Sow $item_detail_sow)
    {
        $this->item_detail_sow=$item_detail_sow;
    }
}
?>