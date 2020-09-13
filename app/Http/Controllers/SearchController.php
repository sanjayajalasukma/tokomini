<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\barang;
use Auth;

class SearchController extends Controller
{
    public function cariBarang(Request $request)
    {
        $search = $request->search;
        $barang = DB::table('barangs')->where('nama', 'like', "%".$search."%")->get();
        return view('hasil', compact('barang'));
    }
    public function handphone()
    {
        if(Auth::User()->hak_akses == "customer"):
            $barang = DB::table('barangs')->where('kategori', 'handphone')->get();
            return view('customer.kategori.handphone', compact('barang'));
        elseif(Auth::User()->hak_akses == "seller"):
            return view('error');
        endif;
    }
    public function laptop()
    {
        if(Auth::User()->hak_akses == "customer"):
            $barang = DB::table('barangs')->where('kategori', 'laptop')->get();
            return view('customer.kategori.laptop', compact('barang'));
        elseif(Auth::User()->hak_akses == "seller"):
            return view('error');
        endif;
    }
    public function pc()
    {
        if(Auth::User()->hak_akses == "customer"):
            $barang = DB::table('barangs')->where('kategori', 'pc')->get();
            return view('customer.kategori.pc', compact('barang'));
        elseif(Auth::User()->hak_akses == "seller"):
            return view('error');
        endif;
    }
    public function mouse()
    {
        if(Auth::User()->hak_akses == "customer"):
            $barang = DB::table('barangs')->where('kategori', 'mouse')->get();
            return view('customer.kategori.mouse', compact('barang'));
        elseif(Auth::User()->hak_akses == "seller"):
            return view('error');
        endif;
    }
    public function keyboard()
    {
        if(Auth::User()->hak_akses == "customer"):
            $barang = DB::table('barangs')->where('kategori', 'keyboard')->get();
            return view('customer.kategori.keyboard', compact('barang'));
        elseif(Auth::User()->hak_akses == "seller"):
            return view('error');
        endif;
    }
    public function memory()
    {
        if(Auth::User()->hak_akses == "customer"):
            $barang = DB::table('barangs')->where('kategori', 'memory')->get();
            return view('customer.kategori.memory', compact('barang'));
        elseif(Auth::User()->hak_akses == "seller"):
            return view('error');
        endif;
    }
    public function speaker()
    {
        if(Auth::User()->hak_akses == "customer"):
            $barang = DB::table('barangs')->where('kategori', 'speaker')->get();
            return view('customer.kategori.speaker', compact('barang'));
        elseif(Auth::User()->hak_akses == "seller"):
            return view('error');
        endif;
    }
}
