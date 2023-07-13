<?php 
namespace App\Repositories;
use App\Models\Sow;

class SowRepository{
    protected $sow;

    public function __construct(Sow $sow)
    {
        $this->sow=$sow;
    }
}
?>