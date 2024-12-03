@extends('layouts.app')
@section('meta')
<title>{{ config('app.site_name') }} - {{ config('app.crud_two_name') }} </title>

<!-- Qo'shimcha SEO va sayt optimallashtirish uchun taglar -->
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/static_img/icon.png') }}">
<link rel="manifest" href="/path/to/your/site.webmanifest">
<link rel="mask-icon" href="{{ asset('images/static_img/icon.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ asset('images/static_img/icon.ico') }}">
<!-- Qo'shimcha uslublar va scriptlar --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/all_news.css') }}"  />
@endsection


@section('content')

<div class="main-carousel" id="home">
        <div class="carousel">
            <div class="items">
                <div class="img_card carousel-image current">
                    <img src="{{ asset('images/static_img/slider.png') }}" alt="" class=" " / />
                    <div class="img_text">
                        <h3 class="lang" >{{ __('app.news1') }}</h3>
                    </div>
                </div>

                <div class="img_card carousel-image ">
                    <img src="{{ asset('images/static_img/slider2.png') }}" alt="" class=" " / />
                    <div class="img_text">
                        <h3 class="lang" >{{ __('app.news1') }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttons">
            <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
            <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
        </div>
    </div>

    <section class="news" id="news">
        <div class="container">

            <div class="news_box">
            @foreach($crud_twos as $posts)

<a href="{{ route('posts.show', ['locale' => app()->getLocale(), 'slug' => $posts->{'slug_' . app()->getLocale()}]) }}" class="news_card">
  <img class="news_img" src="{{ asset($posts->image_path) }}" alt="" />
  <p class="news_subtitle lang" >{{ Str::limit($posts->{'name_' . app()->getLocale()}, 50) }}</p>
  <p class="news_text lang" >{{ Str::limit($posts->{'meta_description_' . app()->getLocale()}, 50) }}</p>
</a>
@endforeach

              
            </div>

        </div>
    </section>

@endsection