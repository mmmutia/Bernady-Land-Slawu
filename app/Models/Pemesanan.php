<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan_rumah';
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'id_user',
        'nama_pemesan',
        'alamat',
        'no_telp',
        'nama_cluster',
        'jenis_pemesanan',
        'tgl_pemesanan',
        'jumlah_cicilan_dp',
        'jumlah_cicilan_inhouse',
        'fc_ktp',
    ];
}
