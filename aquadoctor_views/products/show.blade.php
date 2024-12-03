@extends('layouts.app')
@section('meta')
<meta name="keywords" content="{{ $product->{'tags_' . app()->getLocale()} }}">
<meta name="description" content="{{ $product->{'meta_description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $product->{'name_' . app()->getLocale()} }}">
<meta property="og:description" content="{{ $product->{'meta_description_' . app()->getLocale()} }}">

<meta type="image/jpeg" name="link" href="{{ asset($product->image_path) }}" rel="image_src">
<title>{{ config('app.site_name') }} - {{ $product->{'name_' . app()->getLocale()}  }}</title>
<!-- <link rel="stylesheet" href="{{ asset('css/product_detail.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('css/interier_detail.css') }}"> -->

@endsection

@section('content')

<div class="main-carousel" id="home">
  <div class="carousel">
    <div class="items">
      <div class="img_card carousel-image current">
        @php
        $images = json_decode($product->category->images, true); // Rasmlar massivi
        @endphp
        @if(!empty($images) && isset($images[1])) {{-- Birinchi rasm mavjudligini tekshirish --}}
        <img src="{{ asset($images[1]) }}" alt="" class=" " / />
        @endif

        <div class="img_text">
          <h3 class="lang">{{ $product->category->{'name_' . app()->getLocale()}   }}</h3>
        </div>
      </div>

    </div>
    <div class="buttons">
      <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
      <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
    </div>
  </div>
</div>
  <section class="product">
    <div class="container">
      <div class="product_box">
        <div class="gallery-container">
          <div class="img-zoom-container">
            @php
            $images = json_decode($product->images, true); // Rasmlar massivi
            $firstImage = isset($images[0]) ? $images[0] : null; // Birinchi rasmni olish
            @endphp
            @if($firstImage)
            <img class="active_img" id="active-image" src="{{ asset($firstImage) }}" width="300" height="240" />
            @endif

            <div id="zoom-lens" class="img-zoom-lens"></div>
          </div>
          <div class="thumbnails">
            @php
            $images = json_decode($product->images, true); // Rasmlar massivi
            @endphp

            @if(!empty($images))
            @foreach($images as $image)
            <img src="{{ asset($image) }}" onclick="setActiveImage('{{ asset($image) }}')" />
            @endforeach
            @endif

          </div>
        </div>
        <div class="product_card_text">
          <h2 class="product_title lang">{{ $product->{'name_' . app()->getLocale()}  }}</h2>
          <div class="product_text lang">{!! $product->{'description_' . app()->getLocale()} !!}</div>
        </div>
        <div class="product_icon_card">
          <div class="icon_card">
            <img src="{{ asset('images/static_img/Vector.png') }}" alt="" />
            <p class="icon_text lang">{{ __('app.product4') }}</p>
          </div>
          <div class="icon_card">
            <img src="{{ asset('images/static_img/spExch.svg.png') }}" alt="" />
            <p class="icon_text lang">{{ __('app.product5') }}</p>
          </div>
          <div class="icon_card">
            <img src="{{ asset('images/static_img/spCond.svg fill.png') }}" alt="" />
            <p class="icon_text lang">{{ __('app.product6') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="products2">
    <div class="container">
      <h2 class="products2_title lang">{{ __('app.title') }}</h2>
      <div class="products2_box">
      @foreach($products_other as $product)
          @php
          $containerNumber = $loop->iteration === 1 || ($loop->iteration - 1) % 5 === 0 ? 1 : 2;
          $images = json_decode($product->images, true); // Rasmlar massivi
          @endphp
        <div class="products_card">
          <img src="{{ asset($images[0]) }}" alt="" />
          <p class="product_text2 lang">{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</p>
          <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="btn_product lang">{{ __('app.uznat') }}</a>
        </div>
        @endforeach


      </div>
    </div>
  </section>
  <script src="{{ asset('js/product_photo_gallery.js') }}" ></script>

  @endsection