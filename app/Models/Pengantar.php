<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengantar extends Model
{
    protected $primaryKey="id_pengantar";
    protected $keyType='string';
    protected $table="pengantar";
    protected $fillable =[
        'id_pengantar','id_penawaran','nama_lembaga','alamat_tujuan','isi','tanggal'
    ];
    protected $hidden=[];
    use HasFactory;
    public function penawaran():BelongsTo
    {
        return $this->belongsTo(Penawaran::class);
    }
}
