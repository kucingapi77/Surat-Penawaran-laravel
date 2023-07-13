<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lampiran extends Model
{
    use HasFactory;
    protected $primaryKey="id_lampiran";
    protected $keyType='string';
    protected $table="lampiran";
    protected $fillable=[
        'id_lampiran','id_penawaran','nama_lampiran','deskripsi'
    ];
    protected $hidden =[];
    public function penawaran():BelongsTo
    {
        return $this->belongsTo(Penawaran::class);
    }
}
