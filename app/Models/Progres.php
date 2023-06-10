<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    use HasFactory;
    protected $table = 'progres';
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'id_pemesanan_rumah',
        'id_user',
        'status',
        'keterangan',
        'foto_progres',
        'tanggal',
    ];
}
