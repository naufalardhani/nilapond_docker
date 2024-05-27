@extends('public.templating.layout')
@section('title', 'Ikan Nila - NilaPond')
@section('content')
<section class="bannr" style="background-image: url('{{ asset("assets/img/hero-three.jpg") }}')">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-6">
            <div class="bannr-text">
              <h2>Product Details</h2>
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
                <li class="breadcrumb-item active" aria-current="page">
                  Product Details
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
              <button class="btna">Available Stock {{ $product->stock }}Kg </button>
            </div>
            <div class="propel-text">
              <p class="bn">
              {{ $product->description }}
              </p>
            </div>
            <div class="buynow">
              <a href="#" class="btn">{{formatRupiah($product->price)}}/Kg - Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection