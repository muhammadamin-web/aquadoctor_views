@extends('layouts.app')
@section('meta')
<link rel="stylesheet" href="{{ asset('css/price_page.css') }}">

@endsection

@section('content')
<section class="section">
    <div class="container">
        <div class="container_section">
            <div class="section_card1">
                <h1 class="section_card1_text1  ">
                    <p class="section_card1_text1 lang" style="color: rgb(80, 80, 254);">{{ __('app.price_text1.1') }}</p>
                    <p class="lang">{{ __('app.price_text1.2') }}</p>
                </h1>
                <div class="section_card1_text2">
                    <p class="card1_text lang">{{ __('app.section1_text2') }}</p>
                    <p class="card1_text lang">{{ __('app.section1_text3') }}</p>
                    <p class="card1_text lang">{{ __('app.section1_text4') }}</p>
                </div>
                <div class="section_card1_text3">
                    <button class="nav_button1"><a href="tel:+998938091644" class="lang btn_hover">{{ __('app.section1_text5') }}</a></button>
                    <a class="card1_text3" href="tel:+998938091644">(93) 809-16-44</a>
                </div>
            </div>
            <div class="section_card2">
                <img src="{{ asset('images/static_img/section1-img.png') }}" alt="" />
            </div>
        </div>
    </div>
</section>

<div class="prices">
    <div class="container">
        <div class="prices_box">
        @foreach($products as $product)

            <div class="price_card">
                <div class="price_card_title1">
                    <h1 class="lang">{{ Str::limit($product->{'short_name_' . app()->getLocale()}, 30) }}</h1>
                </div>
                <div class="price_card_title2">
                    <h4 class="lang">{{ __('app.price_text2') }}</h4>
                </div>
                <div class="price_card_text">
                    <p class="lang">{{ Str::limit($product->{'meta_description_' . app()->getLocale()}, 300) }}</p>
                </div>
                <div class="price_buton">
                    <button class="price_link"><a class="lang btn_hover" href="">{{ __('app.price_text4') }}</a></button>
                </div>
            </div>
            @endforeach

            <div class="price_card">
                <div class="price_card_title1">
                    <h1 class="lang">{{ __('app.price_text5') }}</h1>
                </div>
                <div class="price_card_title2">
                    <h4 class="lang">{{ __('app.price_text6') }}</h4>
                </div>
                <div class="price_card_text">
                    <p class="lang">{{ __('app.price_text7') }}</p>
                </div>
                <div class="price_buton">
                    <button class="price_link"><a class="lang btn_hover" href="">{{ __('app.price_text4') }}</a></button>
                </div>
            </div>
            <div class="price_card">
                <div class="price_card_title1">
                    <h1 class="lang">{{ __('app.price_text8') }}</h1>
                </div>
                <div class="price_card_title2">
                    <h4 class="lang">{{ __('app.price_text9') }}</h4>
                </div>
                <div class="price_card_text">
                    <p class="lang">{{ __('app.price_text10') }}</p>
                </div>
                <div class="price_buton">
                    <button class="price_link"><a class="lang btn_hover" href="">{{ __('app.price_text4') }}</a></button>
                </div>
            </div>
            <div class="price_card">
                <div class="price_card_title1">
                    <h1 class="lang">{{ __('app.price_text11') }}</h1>
                </div>
                <div class="price_card_title2">
                    <h4 class="lang">{{ __('app.price_text12') }}</h4>
                </div>
                <div class="price_card_text">
                    <p class="lang">{{ __('app.price_text13') }}</p>
                </div>
                <div class="price_buton">
                    <button class="price_link"><a class="lang  btn_hover" href="">{{ __('app.price_text4') }}</a></button>
                </div>
            </div>
            <div class="price_card">
                <div class="price_card_title1">
                    <h1 class="lang">{{ __('app.price_text14') }}</h1>
                </div>
                <div class="price_card_title2">
                    <h4 class="lang">{{ __('app.price_text15') }}</h4>
                </div>
                <div class="price_card_text">
                    <p class="lang">{{ __('app.price_text16') }}</p>
                </div>
                <div class="price_buton">
                    <button class="price_link"><a class="lang btn_hover" href="">{{ __('app.price_text4') }}</a></button>
                </div>
            </div>
            <div class="price_card">
                <div class="price_card_title1">
                    <h1 class="lang">{{ __('app.price_text17') }}</h1>
                </div>
                <div class="price_card_title2">
                    <h4 class="lang">{{ __('app.price_text18') }}</h4>
                </div>
                <div class="price_card_text">
                    <p class="lang">{{ __('app.price_text19') }}</p>
                </div>
                <div class="price_buton">
                    <button class="price_link"><a class="lang btn_hover" href="">{{ __('app.price_text4') }}</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="business_offer">
    <div class="container">
        <div class="business_box">
            <h2 class="business_title_box">
                <p class="business_title1 lang">{{ __('app.business_text1.1') }}</p>
                <p class="business_title1 lang" style="color: #5050FE;">{{ __('app.business_text1.2') }}</p>
            </h2>
            <a href="te:+998938091644" class="business_link lang btn_hover" id="myBtn2">{{ __('app.business_text2') }}</a>
        </div>
    </div>
</section>

<section class="info_block">
    <div class="container">
        <div class="info_box">
            <div class="info_card1">
                <h2 class="info_title1 lang">{{ __('app.info_text1') }}</h2>
                <h4 class="info_title2 lang">{{ __('app.info_text2') }}</h4>
                <p class="info_text lang">{{ __('app.info_text3') }}</p>
                <p class="info_subtitle lang">{{ __('app.info_text4') }}</p>
                <p class="info_text lang">{{ __('app.info_text5') }}</p>
                <p class="info_subtitle lang">{{ __('app.info_text6') }}</p>
                <p class="info_text lang">{{ __('app.info_text7') }}</p>
                <p class="info_subtitle lang">{{ __('app.info_text8') }}</p>
                <p class="info_text lang">{{ __('app.info_text9') }}</p>
                <p class="info_subtitle lang">{{ __('app.info_text10') }}</p>
                <p class="info_text lang">{{ __('app.info_text11') }}</p>
                <p class="info_subtitle lang">{{ __('app.info_text12') }}</p>
                <p class="info_text lang">{{ __('app.info_text13') }}</p>
                <p class="info_text lang">{{ __('app.info_text14') }}</p>
            </div>
            <div class="info_card2">
                <h2 class="info_title3 lang">{{ __('app.info_text_title') }}</h2>
                <div class="info_card2_links">
                    <a href="" class="info_link lang btn_hover">{{ __('app.info_text15') }}</a>
                    <a href="" class="info_link lang btn_hover">{{ __('app.info_text16') }}</a>
                    <a href="" class="info_link lang btn_hover">{{ __('app.info_text17') }}</a>
                    <a href="" class="info_link lang btn_hover">{{ __('app.info_text18') }}</a>
                    <a href="" class="info_link lang btn_hover">{{ __('app.info_text19') }}</a>
                    <a href="" class="info_link lang btn_hover">{{ __('app.info_text20') }}</a>
                    <a href="" class="info_link lang btn_hover">{{ __('app.info_text21') }}</a>
                    <a href="" class="info_link lang btn_hover">{{ __('app.info_text22') }}</a>
                    <a href="" class="info_link lang btn_hover">{{ __('app.info_text23') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection