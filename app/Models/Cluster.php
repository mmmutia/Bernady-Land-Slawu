<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;
    protected $table = 'cluster';
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'nama_cluster',
        'blok',
        'jumlah_unit',
        'harga',
        'harga_dp',
        'filter',
        'jenis_cluster',
        'foto_cluster',
    ];
}
