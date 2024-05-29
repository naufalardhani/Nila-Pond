@extends('public.templating.layout')
@section('title', 'Ikan Nila - NilaPond')
@section('content')
<section class="bannr" style="background-image: url('{{ asset("assets/img/hero-three.jpg") }}')">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-6">
            <div class="bannr-text">
              <h2>Detail Produk</h2>
              <p>
                Kolam Nila kami adalah tujuan utama bagi pelanggan yang memprioritaskan kualitas dan kesehatan.
              </p>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Produk
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Detail Produk
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="gap our-projects">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="projects-img">
              <img src="{{ asset($product->photo_url) }}" alt="img" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="heading two">
              <h2>{{ $product->name }}</h2>
            </div>
            <div>
              <button class="btna">Stok Tersedia {{ $product->stock }}Kg </button>
            </div>
            <div class="propel-text">
              <p class="bn">
              {{ $product->description }}
              </p>
            </div>
            <div class="buynow">
              <a href="https://wa.link/1yt3u2" class="btn">{{formatRupiah($product->price)}}/Kg - Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection