<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\transaksi;
use App\Models\detail_transaksi;
use Auth;

class TransaksiController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::User()->hak_akses == "seller"):
            $detail_transaksi = detail_transaksi::all();
            return view('seller.transaksi.index', compact('detail_transaksi'));
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function editTransaksi($id)
    {
        if(Auth::User()->hak_akses == "seller"):
            $detail_transaksi = detail_transaksi::find($id);
            return view('seller.transaksi.edit', compact('detail_transaksi'));
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function updateTransaksi(Request $request, $id)
    {
        if(Auth::User()->hak_akses == "seller"):
            $detail = detail_transaksi::where('id', $id)->first();
            $detail->status = $request['status'];
            $detail->save();
            
            // cek pesanan detail
            
            if($detail->status == "Tolak"){
                $barang = barang::where('id', $detail->barang_id)->first();
                $barang->jumlah = $barang->jumlah + $detail->jumlah_barang;
                $barang->update();
            }
            $transaksi = transaksi::where('id', $detail->transaksi_id)->first();
            $transaksi->delete();
            return redirect()->back()->with('toast_success', 'Data Berhasil Diupdate');
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }

}
