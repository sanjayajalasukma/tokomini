@extends('layouts.seller')
@section('content')
    <section class="section-main2">
        <div class="main2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="header-page">Tambah Barang</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right card-title">
                            <button class="btn btn-primary btn-fill">
                                <a href="{{ url('barang/index') }}">
                                    <i class="fa fa-arrow-left"></i> Kembali
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <form action="{{ url('barang/tambah') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori" class="form-control">
                                            <option selected>----</option>
                                            <option value="handphone">Handphone</option>
                                            <option value="laptop">Laptop</option>
                                            <option value="pc">PC</option>
                                            <option value="mouse">Mouse</option>
                                            <option value="keyboard">Keyboard</option>
                                            <option value="memory">Memory</option>
                                            <option value="speaker">Speaker</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Barang</label>
                                        <input type="text" class="form-control" name="nama" placeholder="nama barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah Barang</label>
                                        <input type="number" class="form-control" name="jumlah" placeholder="jumlah barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Harga Barang</label>
                                        <input type="text" class="form-control" name="harga" placeholder="harga barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control">
                                            <option selected>----</option>
                                            <option value="Tersedia">Tersedia</option>
                                            <option value="Kosong">Tidak Tersedia</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection