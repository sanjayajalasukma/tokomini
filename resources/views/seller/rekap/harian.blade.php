@extends('layouts.seller')

@section('content')
    <section class="section-main2">
            <div class="main2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="header-page">Daftar Transaksi Harian</h1>
                        </div>
                    </div>
                    <div class="row">
                       <table class="table">
                           <thead>
                            <th>Nama Pembeli</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                           </thead>
                               @foreach ($detail_transaksi as $detail)
                                @if($detail->transaksi)
                                    <tbody>
                                        <td>{{ $detail->transaksi->User->username }}</td>
                                            <td>{{ $detail->barang->nama }}</td>
                                            <td>{{ $detail->jumlah_barang }}</td>
                                            <td>{{ $detail->total_harga }}</td>
                                            <td>{{ $detail->status }}</td>
                                    </tbody>
                                @else
                                @endif
                               @endforeach
                       </table>
                    </div>
                </div>
            </div>
        </section>

        
@endsection
