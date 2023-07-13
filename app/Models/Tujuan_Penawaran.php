<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tujuan_Penawaran extends Model
{
    use HasFactory;
    protected $primaryKey='id_tujuan';
    protected $keyType='string';
    protected $table='tujuan_penawaran';
    protected $fillable=[
        'id_tujuan','nama_perusahaan','alamat','email','no_telepon','pic'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];

    public function penawaran():BelongsToMany
    {
        return $this->belongsToMany(Penawaran::class);
    }
}
