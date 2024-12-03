@extends('layouts.app')
@section('meta')
<meta name="keywords" content="{{ $category->{'tags_' . app()->getLocale()} }}">
<meta name="description" content="{{ $category->{'description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $category->{'name_' . app()->getLocale()}  }}">
<meta property="og:description" content="{{ $category->{'description_' . app()->getLocale()} }}">
<meta type="image/jpeg" name="link" href="{{ asset($category->image_path) }}" rel="image_src">

<title>{{ config('app.site_name') }} - {{ $category->{'name_' . app()->getLocale()} }}</title>



<link rel="stylesheet" href="{{ asset('css/categorie.css') }}" />
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
          <img src="{{ asset($images[1]) }}" alt="" class=" " / />
          @endif

          <div class="img_text">
            <h3 class="lang" >{{ $category->{'name_' . app()->getLocale()}   }}</h3>
          </div>
        </div>


      </div>
    </div>
    <div class="buttons">
      <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
      <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
    </div>
  </div>
  <section class="vitamin_about">
    <div class="container">
      <div class="vitamin_box">
        <p class="vitamin_text lang" >{{ $category->{'meta_description_' . app()->getLocale()} }}</p>
      </div>
    </div>
  </section>
  <section class="products">
    <div class="container">
      <div class="products_box">
      @foreach($products as $product)
                @php
                $images = json_decode($product->images, true); // Rasmlar massivi
                @endphp
        <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="products_card">
        @if(!empty($images) && isset($images[0])) {{-- Birinchi rasm mavjudligini tekshirish --}}
          <img class="products_img" src="{{ asset($images[0]) }}" alt="" />
          @endif
          <p class="products_text lang" >{{ Str::limit($product->{'name_' . app()->getLocale()}, 50) }}</p>
      </a>
      @endforeach

      </div>
    </div>
  </section>






    @endsection