<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sk extends Model
{   
    use HasFactory;
    protected $primaryKey="id_sk";
    protected $keyType='string';
    protected $table ="sk";
    protected $fillable=[
        'id_sk','id_penawaran','deskripsi'
    ];
    protected $hidden=[];
    public function penawaran():BelongsTo
    {
        return $this->belongsTo(Penawaran::class);
    }
}
