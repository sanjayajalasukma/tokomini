@extends('layouts.app')
@section('content')
<section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <ul class="navbar-nav nav dp">
            <li>
              <a href="{{ url('kategori/handphone') }}">Handphone</a>
            </li>
            <li>
              <a href="{{ url('kategori/laptop') }}">Laptop</a>
            </li>
            <li>
              <a href="{{ url('kategori/pc') }}">PC</a>
            </li>
            <li>
              <a href="{{ url('kategori/mouse') }}">Mouse</a>
            </li>
            <li>
              <a href="{{ url('kategori/keyboard') }}">Keyboard</a>
            </li>
            <li>
              <a href="{{ url('kategori/memory') }}">Memory RAM</a>
            </li>
            <li>
              <a href="{{ url('kategori/speaker') }}">Speaker</a>
            </li>
          </ul>
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{ asset('img/slider/banner1.jpg') }}" alt="Best img" />
              </div>
              <div class="seq-title">
               <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>Best Collection</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{ asset('img/slider/banner2.jpg') }}" alt="Best img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 40% Off</span>                
                <h2 data-seq>Best Collection</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{ asset('img/slider/banner3.jpg') }}" alt="Best img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>Best Collection</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->                           
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="{{ asset('img/promo/promo1.jpg') }}" alt="img">                    
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                      <h4><a href="#">Computer</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ asset('img/promo/promo2.jpg') }}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="#">Laptop</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ asset('img/promo/promo3.jpg') }}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="#">Handphone</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ asset('img/promo/promo4.jpg') }}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="#">Memory RAM</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ asset('img/promo/promo5.jpg') }}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="#">Speaker</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->


  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h1 class="header-page">Product Terpopuler</h1>
            </div>
            <div class="col-md-6">
                <div class="text-right card-title">
                    <a href="#">Lihat Semua Product</a>
                </div>
            </div>
          </div>
          <div class="row">
            @foreach ($barang as $barang)
              <div class="col-md-4">
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
                          <h5>{{ $barang->User->username }}</h5>
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
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <div class="row">
              <!-- single support -->
            <div class="col-md-4 col-sm-4">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>Bebas Ongkir</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 Hari Uang Kembali</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>Layanan 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->



  
@endsection