<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sow extends Model
{
    use HasFactory;
    protected $primaryKey='id_sow';
    protected $keyType='string';
    protected $table='sow';
    protected $fillable=[
        'id_sow','id_penawaran','nama_sow'
    ];
    protected $hidden = [];
    public function penawaran():BelongsTo
    {
        return $this->belongsTo(Penawaran::class);
    }
    public function detail_sow():HasMany
    {
        return $this->hasMany(Detail_Sow::class);
    }
}
