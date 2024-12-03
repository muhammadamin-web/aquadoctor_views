@extends('layouts.app')
@section('meta')

<title>{{ config('app.site_name') }} - {{ __('app.category') }}</title>
<link rel="stylesheet" href="{{ asset('css/all_product.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<style>

</style>
@endsection




@section('content')

<div class="main-carousel" id="home">
    <div class="carousel">
        <div class="items">
            <div class="img_card carousel-image current">
                <img load="lazy" src="{{ asset('images/static_img/banner1.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.categories1') }}</h3>
                </div>
            </div>

            <div class="img_card carousel-image ">
                <img load="lazy" src="{{ asset('images/static_img/banner2.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.categories1') }}</h3>
                </div>
            </div>

            <div class="img_card carousel-image ">
                <img load="lazy" src="{{ asset('images/static_img/banner3.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.categories1') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
        <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
    </div>
</div>
<section class="categories">
    <div class="container">
        <div class="categories_box">
            @foreach($categories as $category)
            @php
            $images = json_decode($category->images, true); // Rasmlar massivi
            @endphp
            <a href="{{ route('category.show', ['locale' => app()->getLocale(), 'slug' => $category->{'slug_' . app()->getLocale()}]) }}" class="categories_card">
                @if(!empty($images) && isset($images[0])) {{-- Birinchi rasm mavjudligini tekshirish --}}
                <img class="categories_img" src="{{ asset($images[0]) }}" alt="" />
                @endif

                <p class="categories_text lang">{{ Str::limit($category->{'name_' . app()->getLocale()}, 50) }}</p>
            </a>
            @endforeach

        </div>
    </div>
</section>

@endsection