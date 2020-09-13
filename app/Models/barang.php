<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = [
        'user_id', 'slug', 'kategori', 'nama', 'jumlah', 'harga', 'status', 'image'
    ];
    public function User(){
        return $this->belongsTo('App\User');
    }
    public function detail_transaksi(){
        return $this->hasMany('App\Models\detail_transaksi', 'id', 'barang_id');
    }
}
