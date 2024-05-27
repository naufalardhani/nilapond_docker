@extends('public.templating.layout')
@section('title', 'NilaPond')
@section('content')
<section
    class="bannr"
    style="background-image: url(assets/img/hero-three.jpg)">
    <div class="container">
    <div class="row align-items-end">
        <div class="col-lg-6">
        <div class="bannr-text">
            <h2>Our Product</h2>
            <p>
            Our Nila Pond is the primary destination for customers who
            prioritize quality and health.
            </p>
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Product
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
        <div class="col-lg-4 col-md-6">
            <div class="projects-style">
                <div class="projects-img">
                <figure>
                    <img src="{{ asset($product->photo_url) }}" height="350" alt="img" />
                </figure>
                <a href="{{ route('product_details', ['id' => $product->id]) }}"><i class="fa-solid fa-angle-right"></i></a>
                </div>
                <h4><a href="{{ route('product_details', ['id' => $product->id]) }}">{{ $product->name }}</a></h4>{{ formatRupiah($product->price) }}/KG (Available stock {{ $product->stock }}Kg)
            </div>
        </div>
        @empty
            <div class="alert alert-danger">
                Data produk belum Tersedia.
            </div>
        @endforelse
        <div class="button-center mt-0">
        <a href="#" class="btn">Load More</a>
        </div>
    </div>
    </div>
</section>
@endsection
