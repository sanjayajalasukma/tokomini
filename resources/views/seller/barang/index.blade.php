@extends('layouts.seller')

@section('content')
    <section class="section-main2">
            <div class="main2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="header-page">Daftar Barang</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="text-right card-title">
                                <button class="btn btn-primary btn-fill">
                                    <a href="{{ url('barang/tambah') }}">
                                        <i class="fa fa-plus"></i> Tambah Barang
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            @foreach (Auth::User()->barang as $barang)
                                <div class="col-md-4">
                                    <div class="product">
                                        <div class="product-thumbnail">
                                            <a href="{{ asset('storage/barang') }}/{{ $barang->kategori }}/{{ $barang->image }}" class="product-hover">
                                                <img src="{{ asset('storage/barang') }}/{{ $barang->kategori }}/{{ $barang->image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h3>
                                                <a href="{{ url('barang/detail', $barang->id) }}">{{ $barang->nama }}</a>
                                                <span class="stok">
                                                    <i class="fa fa-tag"></i>{{ $barang->status }}
                                                </span>
                                            </h3>
                                            <h5>{{ $barang->User->username }}</h5>
                                            <div class="product-footer">
                                                <a href="#">{{ $barang->kategori }}</a>
                                                <a href="#">{{ $barang->harga }}</a>
                                                <a href="#">{{ $barang->jumlah }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </section>
@endsection
