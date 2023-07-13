<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penawaran extends Model
{
    use HasFactory;
    protected $primaryKey="id_penawaran";
    protected $keyType='string';
    protected $table = "penawaran";
    protected $fillable = [
        'id_penawaran','tgl_penawaran','id_perusahaan_tujuan','lampiran','deskripsi','jenis_penawaran'
    ];
    protected $hidden=[];
    
    public function tujuan_penawaran():BelongsToMany
    {
        return $this->belongsToMany(Tujuan_Penawaran::class);
    }

    public function detail_penawaran():HasMany
    {
        return $this->hasMany(Detail_Penawaran::class);
    }

    public function lampiran():HasMany
    {
        return $this->hasMany(Lampiran::class);
    }

    public function sow():HasMany
    {
        return $this->hasMany(Sow::class);
    }

    public function pengantar():HasMany
    {
        return $this->hasMany(Pengantar::class);
    }

    public function kop_surat():HasMany
    {
        return $this->hasMany(Kop_Surat::class);
    }

    public function sk():HasMany
    {
        return $this->hasMany(Sk::class);
    }
}
