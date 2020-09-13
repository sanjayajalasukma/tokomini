<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\barang;
use App\Models\transaksi;
use App\Models\detail_transaksi;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barang = barang::all();
        if (Auth::User()->hak_akses == "customer"):
            Alert::success('Selamat Datang');
            return view('customer.home', compact('barang'));
        elseif(Auth::User()->hak_akses == "seller"):
            Alert::success('Selamat Datang');
            return view('seller.home');
        endif;
    }
    public function barang()
    {
        if (Auth::User()->hak_akses == "seller"):
            return view('seller.barang.index');
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function addBarang()
    {
        if (Auth::User()->hak_akses == "seller"):
            return view('seller.barang.tambah');
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function postBarang(Request $request)
    {
        if (Auth::User()->hak_akses == "seller"):
            
            $slug = uniqid();
            $barang = new barang();
            $barang->user_id = Auth::User()->id;
            $barang->slug = $slug;
            $barang->kategori = $request['kategori'];
            $barang->nama = $request['nama'];
            $barang->jumlah = $request['jumlah'];
            $barang->harga = $request['harga'];
            $barang->status = $request['status'];
            if($request->hasFile('image')){
                $file = $request->file('image');
                $name = Str::slug($request->nama).'.'.$file->getClientOriginalExtension();
                $request->file('image')->move("storage/barang/$request->kategori/", $name);
                $file = $name;
            }else{
                $file = '';
            }
            $barang->image = $file;
            $barang->save();
            return redirect('barang/index')->with('Data Berhasil');

        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function detailBarang($id)
    {
        if (Auth::User()->hak_akses == "seller"):
            $barang = barang::find($id);
            return view('seller.barang.detail', compact('barang'));
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function editBarang($id)
    {
        if (Auth::User()->hak_akses == "seller"):
            $barang = barang::find($id);
            return view('seller.barang.edit', compact('barang'));
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function updateBarang(Request $request, $id)
    {
        if (Auth::User()->hak_akses == "seller"):
            $barang = barang::where('id', $id)->update([
                'kategori' => $request->kategori,
                'nama' => $request->nama,
                'jumlah' => $request->jumlah,
                'harga' => $request->harga,
                'status' => $request->status,
                'image' => $request->image
            ]);
            return redirect('barang/index')->with('toast_success', 'Data Berhasil Diupdate');
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function hapusBarang($id)
    {
        if (Auth::User()->hak_akses == "seller"):
            $barang = barang::find($id);
            $barang->delete();
            return redirect('barang/index')->with('toast_success', 'Data Berhasil Dihapus');    
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function pesan($id)
    {
        if(Auth::User()->hak_akses == "customer"):
            $barang = barang::where('id', $id)->first();
            return view('customer.barang.pesan', compact('barang'));
        elseif(Auth::User()->hak_akses == "seller"):
            return view('error');
        endif;
    }
    public function postPesan(Request $request, $id)
    {
        if(Auth::User()->hak_akses == "seller"):
            return view('error');
        elseif(Auth::User()->hak_akses == "customer"):
            $barang = barang::where('id', $id)->first();
            $tanggal = Carbon::now();
            if($request->jumlah_barang > $barang->jumlah) {
                return redirect('barang/pesan/',$id);
            }
            // cek validasi
            $cek_pesanan = transaksi::where('user_id', Auth::user()->id)->first();
            // simpan ke database pesanan
            if (empty($cek_pesanan)) {
                $slug = uniqid();
                $transaksi = new transaksi;
                $transaksi->user_id = Auth::user()->id;
                $transaksi->slug = $slug;
                $transaksi->no_transaksi = $tanggal;
                $transaksi->total_harga = 0;
                $transaksi->save();
            }
            // simpan ke database pesanan detail
            $pesanan_baru = transaksi::where('user_id', Auth::user()->id)->first();
            // cek pesanan detail
            $cek_pesanan_detail = detail_transaksi::where('barang_id', $barang->id)->where('transaksi_id', $pesanan_baru->id)->first();
            if (empty($cek_pesanan_detail)) {
                $pesanan_detail = new detail_transaksi;
                $pesanan_detail->barang_id = $barang->id;
                $pesanan_detail->transaksi_id = $pesanan_baru->id;
                $pesanan_detail->jumlah_barang = $request->jumlah_barang;
                $pesanan_detail->total_harga = $barang->harga*$request->jumlah_barang;
                $pesanan_detail->save();
            } else {
                $pesanan_detail = detail_transaksi::where('barang_id', $barang->id)->where('transaksi_id', $pesanan_baru->id)->first();
                $pesanan_detail->jumlah_barang = $pesanan_detail->jumlah_barang+$request->jumlah_barang;
                // harga sekarang
                $harga_pesanan_detail_baru = $barang->harga*$request->jumlah_barang;
                $pesanan_detail->total_harga = $pesanan_detail->total_harga+$harga_pesanan_detail_baru;
                $pesanan_detail->update();
            }
            // jumlah total
                $pesanan = transaksi::where('user_id', Auth::user()->id)->first();
                $pesanan->total_harga = $pesanan->total_harga+ $barang->harga*$request->jumlah_barang;
                $pesanan->update();

                if($pesanan_detail){
                    $barang = barang::where('id', $id)->first();
                    $barang->jumlah = $barang->jumlah - $request->jumlah_barang;
                    $barang->update();
                }
            
                return redirect()->back()->with('success', 'Pesanan Berhasil');
        endif;
    }
    public function checkout(){
        if(Auth::User()->hak_akses == "customer"):
            return view('customer.checkout');
        elseif(Auth::User()->hak_akses == "seller"):
            return view('error');
        endif;
    }
    public function rekapHarian()
    {
        if (Auth::User()->hak_akses == "seller"):
            $now = Carbon::now();
            $detail_transaksi = DB::table('detail_transaksis')->where('created_at', $now)->get();
            return view('seller.rekap.harian', compact('detail_transaksi'));
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
    public function rekapBulanan()
    {
        if (Auth::User()->hak_akses == "seller"):
            $now = Carbon::now();
            $month = Carbon::now()->addDays(30);
            $detail_transaksi = DB::table('detail_transaksis')->whereBetween('created_at', [$now, $month])->get();
            return view('seller.rekap.bulanan', compact('detail_transaksi'));
        elseif(Auth::User()->hak_akses == "customer"):
            return view('error');
        endif;
    }
}
