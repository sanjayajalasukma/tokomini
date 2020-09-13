<?php
use App\Models\barang;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $barang = barang::all();
    Alert::success('Success Title', 'Success Message');

    return view('welcome', compact('barang'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// seller
Route::get('barang/index', 'HomeController@barang');
Route::get('barang/tambah', 'HomeController@addBarang');
Route::post('barang/tambah', 'HomeController@postBarang');
Route::get('barang/detail/{id}', 'HomeController@detailBarang');
Route::get('barang/edit/{id}', 'HomeController@editBarang');
Route::patch('barang/update/{id}', 'HomeController@updateBarang');
Route::get('barang/hapus/{id}', 'HomeController@hapusBarang');
Route::get('barang/pesan/{id}', 'HomeController@pesan');
Route::post('barang/pesan/{id}', 'HomeController@postPesan');
Route::get('transaksi/index', 'TransaksiController@index');
Route::get('transaksi/edit/{id}', 'TransaksiController@editTransaksi');
Route::patch('transaksi/update/{id}', 'TransaksiController@updateTransaksi');
Route::get('search', 'SearchController@cariBarang');
Route::get('checkout', 'HomeController@checkout');
Route::get('kategori/pc', 'SearchController@pc');
Route::get('kategori/handphone', 'SearchController@handphone');
Route::get('kategori/laptop', 'SearchController@laptop');
Route::get('kategori/mouse', 'SearchController@mouse');
Route::get('kategori/keyboard', 'SearchController@keyboard');
Route::get('kategori/memory', 'SearchController@memory');
Route::get('kategori/speaker', 'SearchController@speaker');
Route::get('rekap/harian', 'HomeController@rekapHarian');
Route::get('rekap/bulanan', 'HomeController@rekapBulanan');