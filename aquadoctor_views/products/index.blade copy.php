@extends('layouts.app')
@section('meta')

<title>{{ config('app.site_name') }} - {{ __('app.product') }}</title>
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link rel="stylesheet" href="{{ asset('css/price_page.css') }}">

@endsection




@section('content')



<div class="main-carousel" id="home">
            <div class="carousel">
                <div class="items">
                    <div class="img_card carousel-image current">
                        <img src="{{ asset('images/static_img/bg-2.png') }}" alt="" class=" " />
                        <div class="img_text">
                            <h3 class="lang" >{{ __('app.product') }}</h3>
                        </div>
                    </div>
                    <div class="img_card carousel-image ">
                        <img src="{{ asset('images/static_img/bg-1.jpg') }}" alt="" class=" " />
                        <div class="img_text">
                            <h3 class="lang" >{{ __('app.product') }}</h3>
                        </div>
                    </div>
                    <div class="img_card carousel-image ">
                        <img src="{{ asset('images/static_img/bg-3.jpg') }}" alt="" class=" " />
                        <div class="img_text">
                            <h3 class="lang" >{{ __('app.product') }}</h3>
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
            <section class="catalog" id="product">
                <div class="container">
                    <div class="catalog_box">
                    @foreach($products as $product)
                @php
                $containerNumber = $loop->iteration === 1 || ($loop->iteration - 1) % 5 === 0 ? 1 : 2;
                $images = json_decode($product->images, true); // Rasmlar massivi
                @endphp
                <div class="catalog_card aos-init" data-aos="zoom-in-up">
                    <img class="catalog_img" src="{{ asset($images[0]) }}" alt="" />
                    <p class="catalog_subtitle lang">{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</p>
                    <p class="catalog_text lang">{{ Str::limit($product->{'meta_description_' . app()->getLocale()}, 300) }}</p>
                    <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="catalog_link lang">{{ __('app.product_link') }}</a>
                </div>
                @endforeach
                    
                    </div>
                </div>
            </section>
</main>


@endsection