@extends('layouts.app')
@section('meta')
<meta name="keywords" content="{{ $category->{'tags_' . app()->getLocale()} }}">
<meta name="description" content="{{ $category->{'description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $category->{'name_' . app()->getLocale()}  }}">
<meta property="og:description" content="{{ $category->{'description_' . app()->getLocale()} }}">
<meta type="image/jpeg" name="link" href="{{ asset($category->image_path) }}" rel="image_src">

<title>{{ config('app.site_name') }} - {{ $category->{'name_' . app()->getLocale()} }}</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
<link rel="stylesheet" href="{{ asset('css/tour_page.css') }}" />
<link rel="stylesheet" href="{{ asset('css/category_page.css') }}" />
@endsection




@section('content')


<div class="main-carousel" id="home">
  <div class="carousel">
    <div class="items">
      <div class="img_card carousel-image current">
                        @php
                $images = json_decode($category->images, true); // Rasmlar massivi
                @endphp
                @if(!empty($images) && isset($images[1])) {{-- Birinchi rasm mavjudligini tekshirish --}}
        <img src="{{ asset($images[1]) }}" alt="" class=" " />
        @endif

        <div class="img_text">
          <h3 class="lang">{{ $category->{'name_' . app()->getLocale()}   }}</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<main>
    <section class="vitamin_about">
        <div class="container">
            <div class="vitamin_box">
                <p class="vitamin_text">{{ $category->{'meta_description_' . app()->getLocale()} }}</p>
              
            </div>
        </div>
    </section>
    <section class="catalog" id="product">
        <div class="container">
            <div class="catalog_box">
                @foreach($products as $product)
                @php
                $images = json_decode($product->images, true); // Rasmlar massivi
                @endphp
                <div class="catalog_card">
                    @if(!empty($images) && isset($images[0])) {{-- Birinchi rasm mavjudligini tekshirish --}}
                    <img class="catalog_img" src="{{ asset($images[0]) }}" alt="" />
                    @endif
                    <p class="catalog_subtitle lang">{{ Str::limit($product->{'name_' . app()->getLocale()}, 50) }}</p>
                    <p class="catalog_text lang">{{ Str::limit($product->{'meta_description_' . app()->getLocale()}, 50) }}</p>
                    <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="catalog_link lang">{{ __('app.product_link') }}</a>
                </div>
                @endforeach


            </div>
        </div>
    </section>






    @endsection