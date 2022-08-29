<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapTransaksi extends Model
{
    use HasFactory;

    protected $table = 'rekap_transaksis';

    protected $fillable = [
        'transaksi_id', 
        'user_id',
        'total_bayar',
    ];
}
