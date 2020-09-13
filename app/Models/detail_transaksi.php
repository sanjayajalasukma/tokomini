<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    protected $fillable = [
        'barang_id', 'transaksi_id', 'jumlah_barang', 'total_harga', 'status'
    ];
    public function barang(){
        return $this->belongsTo('App\Models\barang', 'id', 'barang_id');
    }
    public function transaksi(){
        return $this->belongsTo('App\Models\transaksi', 'id', 'transaksi_id');
    }
}
