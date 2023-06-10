<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SerahTerima extends Model
{
    use HasFactory;
    protected $table= 'serah_terima';
    protected $PrimaryKey= 'id';
    protected $fillable= [
        'id_pemesanan_rumah',
        'no_surat_bangunan',
    ];
}
