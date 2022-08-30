<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $fillable = [
        'transaksi_id',
        'nama_pelanggan',
        'user_id',
        'menu_id',
        'jumlah',
        'total_harga',
        'pegawai_id',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function pegawai()
    {
        return $this->belongsTo(User::class, 'pegawai_id', 'id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
