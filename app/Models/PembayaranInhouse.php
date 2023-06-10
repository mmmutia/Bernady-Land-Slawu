<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranInhouse extends Model
{
    use HasFactory;
    protected $table= 'pembayaran_inhouse';
    protected $PrimaryKey= 'id';
    protected $fillable= [
        'id_pemesanan_rumah',
        'tgl_pembayaran_inhouse',
        'bukti_pembayaran_inhouse',
    ];
}
