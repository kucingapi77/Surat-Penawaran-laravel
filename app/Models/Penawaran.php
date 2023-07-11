<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    use HasFactory;
    
    public function tujuan_penawaran(){
        return $this->belongsToMany(Tujuan_Penawaran::class);
    }

    public function detail_penawaran(){
        return $this->hasMany(Detail_Penawaran::class);
    }

    public function lampiran(){
        return $this->hasMany(Lampiran::class);
    }

    public function sow(){
        return $this->hasMany(Sow::class);
    }

    public function pengantar(){
        return $this->hasMany(Pengantar::class);
    }

    public function kop_surat(){
        return $this->hasMany(Kop_Surat::class);
    }

    public function sk(){
        return $this->hasMany(Sk::class);
    }
}
