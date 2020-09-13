@extends('layouts.seller')

@section('content')
    <section class="section-main2">
            <div class="main2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="header-page">Detail {{ $barang->nama }}</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="text-right card-title">
                                <button class="btn btn-danger btn-fill">
                                    <a href="{{ url('barang/index') }}">
                                        <i class="fa fa-arrow-left"></i> Kembali
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="product">
                                        <div class="product-thumbnail">
                                            <a href="{{ asset('storage/barang') }}/{{ $barang->kategori }}/{{ $barang->image }}" class="product-hover">
                                                <img src="{{ asset('storage/barang') }}/{{ $barang->kategori }}/{{ $barang->image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h3>
                                                <a href="#">{{ $barang->nama }}</a>
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
                                        <div class="row justify-content-center">
                                            <a href="{{ url('barang/edit', $barang->id) }}" class="btn btn-success btn-fill">
                                                <i class="fa fa-pencil"></i>Edit
                                            </a>
                                            <a href="{{ url('barang/hapus', $barang->id) }}" class="btn btn-danger btn-fill">
                                                <i class="fa fa-trash"></i>Hapus
                                            </a>
                                        </div>
                                    </div>
                                </div>

                    </div>
                </div>
            </div>
        </section>
@endsection
