<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'nama_menu',
        'harga',
        'deskripsi',
        'foto',
        'kategori',
        'ketersediaan',
    ];

    public function getRouteKeyName()
    {
      return 'nama_menu';
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
