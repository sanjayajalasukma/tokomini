@extends('layouts.seller')
@section('content')
    <section class="section-main2">
        <div class="main2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="header-page">Daftar Transaksi</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right card-title">
                            <button class="btn btn-primary btn-fill">
                                <a href="{{ url('transaksi/index') }}">
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
                                <form action="{{ url('transaksi/update', $detail_transaksi->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row justify-content-center">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" class="form-control">
                                                <option selected>----</option>
                                                <option value="Terima">Setuju</option>
                                                <option value="Tolak">Tidak Setuju</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </div>
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