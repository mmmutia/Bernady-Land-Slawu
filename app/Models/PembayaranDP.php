<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranDP extends Model
{
    use HasFactory;
    protected $table= 'pembayaran_dp';
    protected $PrimaryKey= 'id';
    protected $fillable= [
        'id_pemesanan_rumah',
        'tgl_pembayaran_dp',
        'bukti_pembayaran_dp',
    ];

}
