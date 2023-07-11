<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sow extends Model
{
    use HasFactory;
    public function penawaran(){
        return $this->belongsTo(Penawaran::class);
    }
    public function detail_sow(){
        return $this->hasMany(Detail_Sow::class);
    }
}
