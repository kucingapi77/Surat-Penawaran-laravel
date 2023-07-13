<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail_Sow extends Model
{
    use HasFactory;
    protected $primaryKey='id_detail_sow';
    protected $keyType='string';
    protected $table = "detail_sow";
    protected $fillable = [
        'id_sow','rincian_pekerjaan','nama_pekerjaan','nama_perusahaan','pic_penerima'
    ];
    protected $hidden =['id_detail_sow'];



    public function sow():BelongsTo
    {
        return $this->belongsTo(Sow::class);
    }

    public function item_detail_sow():HasMany
    {
        return $this->hasMany(Item_Detail_Sow::class);
    }
}
