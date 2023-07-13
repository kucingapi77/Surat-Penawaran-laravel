<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item_Detail_Sow extends Model
{
    use HasFactory;
    protected $primaryKey = "id_item_detail_sow";
    protected $keyType='string';
    protected $table = "item_detail_sow";
    protected $fillable = [
        'id_item_detail_sow','id_detail_sow','rincian_pekerjaan','tugas_penawar','pic_penerima'
    ];
    protected $hiddem =[];


    public function detail_sow():BelongsTo
    {
        return $this->belongsTo(Detail_Sow::class);
    }
}
