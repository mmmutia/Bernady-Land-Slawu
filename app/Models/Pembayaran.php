<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table= 'pembaran_dp';
    protected $PrimaryKey= 'id';
    protected $fillable= [
        'tgl_pembayaran_dp',
        'bukti_pembayaran_dp',
        'status_dp',
    ];

}
