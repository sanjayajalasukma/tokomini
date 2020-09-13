@extends('layouts.app')
@section('content')
    <section class="section-main2">
        <div class="main2">
            <div class="container">
                <div class="row  bb2">
                    @foreach ($barang as $barang)
                    <div class="col-md-4" style="margin: 30px 0;">
                        <div class="product">
                            <div class="product-thumbnail">
                                <a href="{{ asset('storage/barang') }}/{{ $barang->kategori }}/{{ $barang->image }}" class="product-hover">
                                    <img src="{{ asset('storage/barang') }}/{{ $barang->kategori }}/{{ $barang->image }}" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3>
                                    <a href="">{{ $barang->nama }}</a>
                                    <span class="stok">
                                        <i class="fa fa-tag"></i>{{ $barang->status }}
                                    </span>
                                </h3>
                                <h5></h5>
                                <div class="product-footer">
                                    <a href="#">{{ $barang->kategori }}</a>
                                    <a href="#">{{ $barang->harga }}</a>
                                    <a href="#">{{ $barang->jumlah }}</a>
                                    <a href="{{ url('barang/pesan', $barang->id) }}" class="btn btn-primary" style="float: right;">
                                      <i class="fa fa-shopping-cart"></i> Pesan
                                    </a>
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