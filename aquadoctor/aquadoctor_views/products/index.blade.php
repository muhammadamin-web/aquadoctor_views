@extends('layouts.app')
@section('meta')

<title>{{ config('app.site_name') }} - {{ __('app.product') }}</title>
<link rel="stylesheet" href="{{ asset('css/all_products.css') }}">

@endsection




@section('content')


<div class="main-carousel" id="home">
    <div class="carousel">
        <div class="items">
            <div class="img_card carousel-image current">
                <img load="lazy" src="{{ asset('images/static_img/banner1.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.product') }}</h3>
                </div>
            </div>

            <div class="img_card carousel-image ">
                <img load="lazy" src="{{ asset('images/static_img/banner2.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.product') }}</h3>
                </div>
            </div>

            <div class="img_card carousel-image ">
                <img load="lazy" src="{{ asset('images/static_img/banner3.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.product') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
        <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
    </div>
</div>
<section class="products">
    <div class="container">
        <div class="products_box">
            @foreach($products as $product)
            @php
            $containerNumber = $loop->iteration === 1 || ($loop->iteration - 1) % 5 === 0 ? 1 : 2;
            $images = json_decode($product->images, true); // Rasmlar massivi
            @endphp
            <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="products_card">
                <img class="products_img" src="{{ asset($images[0]) }}" alt="" />
                <p class="products_text lang">{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</p>
            </a>
            @endforeach

        </div>
    </div>
</section>


@endsection