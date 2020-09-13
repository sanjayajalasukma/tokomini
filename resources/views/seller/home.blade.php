@extends('layouts.seller')

@section('content')
    <section class="section-main2">
            <div class="main2">
                <div class="container">
                    <h1 class="header-page">Dashboard</h1>
                    <div class="row">
                        
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card bl-blue bg-gray">
                                <div class="card-body">
                                    <div class="row align-items">
                                        <div class="col mr-2">
                                            <div class="t-blue t-ads">jumlah user</div>
                                            <div class="t-gray">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-2x fa-user-friends t-abu"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card bl-green bg-gray">
                                <div class="card-body">
                                    <div class="row align-items">
                                        <div class="col mr-2">
                                            <div class="t-green t-ads">jumlah Karyawan</div>
                                            <div class="t-gray">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-2x fa-store-alt t-abu"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card bl-navy bg-gray">
                                <div class="card-body">
                                    <div class="row align-items">
                                        <div class="col mr-2">
                                            <div class="t-navy t-ads">jumlah Stok</div>
                                            <div class="t-gray">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-2x fa-tshirt t-abu"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bl-yellow bg-gray">
                                <div class="card-body">
                                    <div class="row align-items">
                                        <div class="col mr-2">
                                            <div class="t-yellow t-ads">jumlah desain</div>
                                            <div class="t-gray">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-2x fa-palette t-abu"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </section>
@endsection
