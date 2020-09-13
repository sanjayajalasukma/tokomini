<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = [
        'user_id', 'slug', 'no_transaksi', 'total_harga'
    ];

    public function User(){
        return $this->belongsTo('App\User');
    }
    public function detail_transaksi(){
        return $this->hasMany('App\Models\detail_transaksi', 'id', 'transaksi_id');
    }
}
