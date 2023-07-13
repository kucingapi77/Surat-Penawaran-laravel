<?php 
namespace App\Repositories;
use App\Models\Pengantar;

class PengantarRepository{
    protected $pengantar;

    public function __construct(Pengantar $pengantar)
    {
        $this->pengantar=$pengantar;
    }
}
?>