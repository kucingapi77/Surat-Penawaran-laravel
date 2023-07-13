<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Detail_Penawaran extends Model
{
    use HasFactory;
    protected $primaryKey="id_detail_penawaran";
    protected $keyType='string';
    protected $table = "detail_penawaran";
    protected $fillable = [
        'id_penawaran','deskripsi','jumlah','jenis_pekerjaan','biaya','qty','satuan','harga_satuan','total'
    ];

    protected $hidden =['id_detail_penawaran'];

    public function penawaran():BelongsTo
    {
        return $this->belongsTo(Penawaran::class);
    }
}
