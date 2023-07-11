<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    use HasFactory;
    public function penawaran(){
        return $this->belongsTo(Penawaran::class);
    }
}
