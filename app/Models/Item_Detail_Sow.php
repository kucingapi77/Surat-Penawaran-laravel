<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_Detail_Sow extends Model
{
    use HasFactory;

    public function detail_sow(){
        return $this->belongsTo(Detail_Sow::class);
    }
}
