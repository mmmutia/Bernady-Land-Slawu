<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpesifikasiTeknis extends Model
{
    use HasFactory;
    protected $table = 'spesifikasi_teknis';
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'id_cluster',
        'pondasi',
        'dinding',
        'rangka_atap',
        'kusen',
        'plafond',
        'air',
        'listrik',
        'jumlah_kamar',
        'luas_tanah',
    ];
}
