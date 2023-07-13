<?php 
namespace App\Repositories;
use App\Models\Sk;

class SkRepository{
    protected $sk;

    public function __construct(Sk $sk)
    {
        $this->sk=$sk;
    }
}
?>