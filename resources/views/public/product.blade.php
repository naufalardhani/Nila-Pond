@extends('public.templating.layout')
@section('title', 'NilaPond - Products')
@section('content')
<section
    class="bannr"
    style="background-image: url(assets/img/hero-three.jpg)">
    <div class="container">
    <div class="row align-items-end">
        <div class="col-lg-6">
        <div class="bannr-text">
            <h2>Produk Kami</h2>
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
            </ol>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="bannr-img">
            <img src="assets/img/productimg.png" alt="imgs" />
        </div>
        </div>
    </div>
    </div>
</section>
<section class="gap our-projects">
    <div class="container">
    <div class="row">
    @forelse ($products as $product)
        @if ($product->is_active == 1)
            <div class="col-lg-4 col-md-6">
                <div class="projects-style">
                    <div class="projects-img">
                        <figure>
                            <img src="{{ asset($product->photo_url) }}" height="350" alt="img" />
                        </figure>
                        <a href="{{ route('product_details', ['id' => $product->id]) }}">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                    <h4>
                        <a href="{{ route('product_details', ['id' => $product->id]) }}">
                            {{ $product->name }}
                        </a>
                    </h4>
                    {{ formatRupiah($product->price) }}/KG (Stok Tersedia {{ $product->stock }}Kg)
                </div>
            </div>
        @endif
    @empty
        <div class="alert alert-danger">
            Data produk belum Tersedia.
        </div>
    @endforelse
    <div class="button-center mt-0">
        <a href="#" class="btn">Muat Lebih Banyak</a>
    </div>
</div>

    </div>
    </div>
</section>
@endsection
