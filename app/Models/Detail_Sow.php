<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Sow extends Model
{
    use HasFactory;

    public function sow(){
        return $this->belongsTo(Sow::class);
    }

    public function item_detail_sow(){
        return $this->hasMany(Item_Detail_Sow::class);
    }
}
