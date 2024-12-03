@extends('layouts.app')
@section('meta')

<title>{{ config('app.site_name') }} - {{ $crud_two->{'name_' . app()->getLocale()} }}</title>
<meta name="keywords" content="{{ $crud_two->{'tags_' . app()->getLocale()} }}">
<meta name="description" content="{{ $crud_two->{'description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $crud_two->{'name_' . app()->getLocale()}  }}">
<meta property="og:description" content="{{ $crud_two->{'description_' . app()->getLocale()} }}">
<meta type="image/jpeg" name="link" href="{{ asset($crud_two->image_path) }}" rel="image_src">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="CMD TECH - Создать веб-сайт, услуги Google по рекламе и SEO">
<meta property="twitter:description" content="CMD TECH - Создать веб-сайт, услуги Google по рекламе и SEO">
<!-- Qo'shimcha SEO va sayt optimallashtirish uchun taglar -->
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/static_img/icon.png') }}">
<link rel="manifest" href="/path/to/your/site.webmanifest">
<link rel="mask-icon" href="{{ asset('images/static_img/icon.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ asset('images/static_img/icon.ico') }}">
<title>Tourfetto - {{ $crud_two->{'meta_name_' . app()->getLocale()}  }}</title>
<!-- Qo'shimcha uslublar va scriptlar -->



<meta name="keywords" content="{{ $crud_two->{'tags_' . app()->getLocale()} }}">
<meta name="description" content="{{ $crud_two->{'meta_description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $crud_two->{'name_' . app()->getLocale()} }}">
<meta property="og:description" content="{{ $crud_two->{'meta_description_' . app()->getLocale()} }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500&display=swap" rel="stylesheet">
<title>{{ config('app.site_name') }} - {{ $crud_two->{'name_' . app()->getLocale()} }}</title>
<link rel="stylesheet" href="{{ asset('css/article_page.css') }}" />
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
<link rel="stylesheet" href="{{ asset('css/product.css') }}">

@endsection


@section('content')

<div class="main-carousel" id="home">
        <div class="carousel">
            <div class="items">
                <div class="img_card carousel-image current">
                    <img src="{{ asset('images/static_img/slider.png') }}" alt="" class=" " / />
                    <div class="img_text">
                        <h3 class="">ПОПУЛЯРНЫЕ НОВОСТИ </h3>
                    </div>
                </div>

                <div class="img_card carousel-image ">
                    <img src="{{ asset('images/static_img/slider2.png') }}" alt="" class=" " / />
                    <div class="img_text">
                        <h3 class="" >{{ __('app.news') }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttons">
            <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
            <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
        </div>
    </div>

    <section class="product">
        <div class="container">
            <div class="product_box">
                <div class="product_information_card">
                    <p class="new_date lang" >{{$crud_two->created_at_formatted}}</p>
                    <h2 class="new_title lang" > {{ $crud_two->{'name_' . app()->getLocale()} }}</h2>
                    <div class="new_text lang" >{!! $crud_two->{'description_' . app()->getLocale()} !!}</div>
                </div>
                <div class="product_left">
                @foreach($crud_twos_other as $crud_two)

                    <a href="{{ route('posts.show', ['locale' => app()->getLocale(), 'slug' => $crud_two->{'slug_' . app()->getLocale()}]) }}" class="news_card">
                        <img class="news_img" src="{{ asset($crud_two->image_path) }}" alt="" />
                        <p class="news_subtitle lang" >{{ Str::limit($crud_two->{'name_' . app()->getLocale()}, 50) }}</p>
                        <p class="news_text lang" >{{ Str::limit($crud_two->{'meta_description_' . app()->getLocale()}, 50) }}</p>
                    </a>
                    @endforeach

                 
                </div>
            </div>
        </div>
    </section>

@endsection