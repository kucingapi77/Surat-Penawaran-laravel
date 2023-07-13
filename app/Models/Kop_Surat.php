<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kop_Surat extends Model
{
    use HasFactory;
    protected $primaryKey="id_kop_surat";
    protected $keyType='string';
    protected $table ="kop_surat";
    protected $fillable=[
        'id_kop_surat','id_penawaran','nomor_surat','lampiran','perihal'
    ];
    protected $hidden=[];

    public function penawaran():BelongsTo
    {
        return $this->belongsTo(Penawaran::class);
    }
}
