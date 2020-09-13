@extends('layouts.app')
@section('content')
    <section class="section-main2">
        <div class="main2">
            <div class="container">
                <div class="row justify-content-center bb2">
                    <div class="col-md-6">
                        <table class="table m20">
                            <tbody>
                                <tr>
                                    <td>Nama Barang</td>
                                    <td>:</td>
                                    <td>{{ $barang->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td>Rp. {{ (number_format($barang->harga))}}</td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td>{{ number_format($barang->jumlah) }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td>{{ $barang->kategori }}</td>
                                </tr>
                                <form action="{{ url('barang/pesan', $barang->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <tr>
                                        <td>Jumlah Barang</td>
                                        <td>:</td>
                                        <td>
                                            <input class="form-control" type="text" name="jumlah_barang" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                            <button class="btn btn-danger btn-fill">
                                                <a href="{{ url('/home') }}">
                                                    <i class="fa fa-arrow-left"></i> Kembali
                                                </a>
                                            </button>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection