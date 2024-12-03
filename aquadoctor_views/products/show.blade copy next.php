@extends('layouts.app')
@section('meta')
<meta name="keywords" content="{{ $product->{'tags_' . app()->getLocale()} }}">
<meta name="description" content="{{ $product->{'meta_description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $product->{'name_' . app()->getLocale()} }}">
<meta property="og:description" content="{{ $product->{'meta_description_' . app()->getLocale()} }}">

<meta type="image/jpeg" name="link" href="{{ asset($product->image_path) }}" rel="image_src">
<title>{{ config('app.site_name') }} - {{ $product->{'name_' . app()->getLocale()}  }}</title>
<!-- <link rel="stylesheet" href="{{ asset('css/product_detail.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('css/interier_detail.css') }}"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section('content')
<div class="main-carousel" id="home">
  <div class="carousel">
    <div class="items">
      <div class="img_card carousel-image current">
        <img src="{{ asset('images/static_img/bg-2.png') }}" alt="" class=" " / />
        <div class="img_text">
          <h3 class="lang">{{ $product->category->{'name_' . app()->getLocale()}   }}</h3>
        </div>
      </div>

      <div class="img_card carousel-image ">
        <img src="{{ asset('images/static_img/bg-1.jpg') }}" alt="" class=" " / />
        <div class="img_text">
          <h3 class="lang">{{ __('app.vitamin_img') }}</h3>
        </div>
      </div>

      <div class="img_card carousel-image ">
        <img src="{{ asset('images/static_img/bg-3.jpg') }}" alt="" class=" " / />
        <div class="img_text">
          <h3 class="lang">{{ __('app.vitamin_img') }}</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="buttons">
    <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
    <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
  </div>
</div>
<main>
  <section class="product">
    <div class="container">
      <div class="product_box">
        <div class="product_information_card">
          <h2 class="product_title lang">{{ $product->{'name_' . app()->getLocale()}  }}</h2>
          @php
          $images = json_decode($product->images, true); // Rasmlar massivi
          $firstImage = isset($images[0]) ? $images[0] : null; // Birinchi rasmni olish
          @endphp
          @if($firstImage)

          <img class="product_img" src="{{ asset($firstImage) }}" alt="" />
          @endif

          <div class="information_text_card">
            <p class="information_text lang">{!! $product->{'description_' . app()->getLocale()} !!}</p>
            <!-- <div class="border"></div>
            <p class="information_subtitle lang">{{ __('app.product_text3') }}</p>
            <p class="information_text lang">{{ __('app.product_text4') }}</p>
            <p class="information_subtitle lang">{{ __('app.product_text5') }}</p>
            <p class="information_text lang">{{ __('app.product_text6') }}</p>
            <p class="information_subtitle lang">{{ __('app.product_text7') }}</p>
            <p class="information_text lang">{{ __('app.product_text8') }}</p>
            <p class="information_subtitle lang">{{ __('app.product_text9') }}</p>
            <p class="information_text lang">{{ __('app.product_text10') }}</p>
            <p class="information_subtitle lang">{{ __('app.product_text11') }}</p>
            <p class="information_text lang">{{ __('app.product_text12') }}</p>
            <p class="information_subtitle lang">{{ __('app.product_text13') }}</p>
            <p class="information_text lang">{{ __('app.product_text14') }}</p>
            <p class="information_subtitle lang">{{ __('app.product_text15') }}</p>
            <p class="information_text lang">{{ __('app.product_text16') }}</p>
            <p class="product_link lang">{{ __('app.product_text17') }}</p> -->
          </div>
        </div>
        <div class="product_left">
        @foreach($products_other as $product)
        @php
                $containerNumber = $loop->iteration === 1 || ($loop->iteration - 1) % 5 === 0 ? 1 : 2;
                $images = json_decode($product->images, true); // Rasmlar massivi
                @endphp
          <div class="catalog_card">
            <img class="catalog_img" src="{{ asset($images[0]) }}" alt="" />
            <p class="catalog_subtitle lang">{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</p>
            <p class="catalog_text lang">{{ Str::limit($product->{'meta_description_' . app()->getLocale()}, 300) }}</p>
            <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="catalog_link lang">{{ __('app.product_link') }}</a>
          </div>
          @endforeach

        
        </div>
      </div>
    </div>
  </section>
</main>

@endsection