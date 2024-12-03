@extends('layouts.app')
@section('meta')

<title>{{ config('app.site_title') }} </title>


<!-- Qo'shimcha SEO va sayt optimallashtirish uchun taglar -->
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/static_img/icon.png') }}">
<link rel="mask-icon" href="{{ asset('images/static_img/icon.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ asset('images/static_img/icon.ico') }}">
<!-- Qo'shimcha uslublar va scriptlar -->
<!-- Qo'shimcha uslublar va scriptlar -->



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('navbar')

@endsection

@section('content')

<div class="main-carousel" id="home">
    <div class="carousel">
        <div class="items">
            <div class="img_card carousel-image current">
                <img src="{{ asset('images/static_img/bg-2.png') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.navimage1') }}</h3>
                </div>
            </div>

            <div class="img_card carousel-image ">
                <img src="{{ asset('images/static_img/bg-1.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.navimage2') }}</h3>
                </div>
            </div>

            <div class="img_card carousel-image ">
                <img src="{{ asset('images/static_img/bg-3.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.navimage3') }}</h3>
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
    <section class="about" id="about">
        <div class="container">
            <div class="about_box">
                <div class="about_card1">
                    <h2 class="about_title lang">{{ __('app.about') }}</h2>
                    <img class="about_img" src="{{ asset('images/static_img/about.png') }}" alt="" />
                </div>
                <div class="about_card2">
                    <p class="about_text1 lang ">{{ __('app.about_text1') }}</p>
                    <p class="about_text2 lang">{{ __('app.about_text2') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about_bottom"></section>
    <section class="category" id="category">
        <div class="container">
            <div class="title_card">
                <h2 class="title lang">{{ __('app.category') }}</h2>
                <a class="link" href="{{ route('category',[app()->getLocale()]) }}"><span class="lang">{{ __('app.link') }}</span><img src="{{ asset('images/static_img/prev.svg') }}" alt="" /></a>
            </div>
            <div class="category_box">
                @foreach($categories as $category)
                @php
                $images = json_decode($category->images, true); // Rasmlar massivi
                @endphp
                <a href="{{ route('category.show', ['locale' => app()->getLocale(), 'slug' => $category->{'slug_' . app()->getLocale()}]) }}" class="category_card">
                @if(!empty($images) && isset($images[0])) {{-- Birinchi rasm mavjudligini tekshirish --}}
                    <img class="category_img" src="{{ asset($images[0]) }}" alt="" />
                    @endif
                    <p class="category_text lang">{{ Str::limit($category->{'name_' . app()->getLocale()}, 50) }}</p>
                </a>
                @endforeach

                <a class="link1" href="{{ route('category',[app()->getLocale()]) }}">
                            <span class="lang" >{{ __('app.link') }}</span>
                            <img src="{{ asset('images/static_img/prev.svg') }}" alt="" />
                        </a>
            </div>
        </div>
    </section>
    <section class="catalog" id="product">
        <div class="container">
            <h2 class="title lang">{{ __('app.product') }}</h2>
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

                <a class="c_link" href="{{ route('product',[app()->getLocale()]) }}">
                            <span class="lang" >{{ __('app.link') }}</span>
                            <img src="{{ asset('images/static_img/prev.svg') }}" alt="" />
                        </a>
            </div>
    </section>
    <section class="specialist" id="comand">
        <h2 class="specialist_title lang">{{ __('app.comand') }}</h2>
        <div class="specialist_box">
            <div class="specialist_card">
                <img class="specialist_img" src="{{ asset('images/static_img/specialist1.png') }}" alt="" />
                <h4 class="specialist_subtitle lang">{{ __('app.comand_title1') }}</h4>
                <p class="specialist_text lang">{{ __('app.comand_text1') }}</p>
            </div>
            <div class="specialist_card">
                <img class="specialist_img" src="{{ asset('images/static_img/specialist2.png') }}" alt="" />
                <h4 class="specialist_subtitle lang">{{ __('app.comand_title2') }}</h4>
                <p class="specialist_text lang">{{ __('app.comand_text2') }}</p>
            </div>
            <div class="specialist_card">
                <img class="specialist_img" src="{{ asset('images/static_img/specialist3.png') }}" alt="" />
                <h4 class="specialist_subtitle lang">{{ __('app.comand_title3') }}</h4>
                <p class="specialist_text lang">{{ __('app.comand_text3') }}</p>
            </div>
            <div class="specialist_card">
                <img class="specialist_img" src="{{ asset('images/static_img/specialist4.png') }}" alt="" />
                <h4 class="specialist_subtitle lang">{{ __('app.comand_title4') }}</h4>
                <p class="specialist_text lang">{{ __('app.comand_text4') }}</p>
            </div>
            <div class="specialist_card">
                <img class="specialist_img" src="{{ asset('images/static_img/specialist5.png') }}" alt="" />
                <h4 class="specialist_subtitle lang">{{ __('app.comand_title5') }}</h4>
                <p class="specialist_text lang">{{ __('app.comand_text5') }}</p>
            </div>
        </div>
    </section>
    <section class="news" id="news">
        <div class="container">
            <div class="news_link_card">
                <h2 class="news_title lang">{{ __('app.news1') }}</h2>
                <a class="news_link" href="{{ route('posts',[app()->getLocale()]) }}"><span class="lang">{{ __('app.link') }}</span><img src="{{ asset('images/static_img/prev.svg') }}" alt="" /></a>
            </div>
            <div class="news_box">
            @foreach($crud_two as $posts)

                <a href="{{ route('posts.show', ['locale' => app()->getLocale(), 'slug' => $posts->{'slug_' . app()->getLocale()}]) }}" class="news_card">
                    <img class="news_img" src="{{ asset($posts->image_path) }}" alt="" />
                    <div class="news_date ">
                        <p class="news_date_text lang">{{$posts->created_at_formatted}}</p>
                        <span> </span>
                        <p class="news_date_text lang">{{ __('app.news_date1.2') }}</p>
                    </div>
                    <p class="news_subtitle lang">{{ Str::limit($posts->{'name_' . app()->getLocale()}, 50) }}</p>
                    <p class="news_text lang">{{ Str::limit($posts->{'meta_description_' . app()->getLocale()}, 50) }}</p>
                </a>
                    @endforeach

              
                <a class="news_link2" href="{{ route('posts',[app()->getLocale()]) }}"><span class="lang">{{ __('app.link') }}</span><img src="{{ asset('images/static_img/prev.svg') }}" alt="" /></a>
            </div>

        </div>  
    </section>

    @endsection