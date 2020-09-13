@extends('layouts.app')
@section('content')
    <section class="section-main2">
        <div class="main2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="header-page">Daftar Transaksi</h1>
                    </div>
                </div>
                <div class="row justify-content-center bb2">
                    <div class="col-md-6">
                        <table class="table m20">
                            <thead>
                                <th>No. Transaksi</th>
                                <th>Total Harga</th>
                            </thead>
                            @foreach (Auth::User()->transaksi as $user)
                            <tbody>
                                <td>{{ $user->no_transaksi }}</td>
                                <td>{{ $user->total_harga }}</td>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection