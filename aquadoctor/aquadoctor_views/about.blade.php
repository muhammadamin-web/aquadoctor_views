@extends('layouts.app')
@section('meta')

<title>{{ config('app.site_title') }} </title>

<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<!-- Qo'shimcha SEO va sayt optimallashtirish uchun taglar -->

@endsection
@section('content')
<div class="main-carousel" id="home">
          <div class="carousel">
            <div class="items">
              <div class="img_card carousel-image current">
                <img src="{{ asset('images/static_img/bg-2.png') }}" alt="" class=" " / />
                <div class="img_text">
                  <h3 class="lang" >{{ __('app.about') }}</h3>
                </div>
              </div>
    
              <div class="img_card carousel-image ">
                <img src="{{ asset('images/static_img/bg-1.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                  <h3 class="lang" >{{ __('app.about') }}</h3>
                </div>
              </div>
    
              <div class="img_card carousel-image ">
                <img src="{{ asset('images/static_img/bg-3.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                  <h3 class="lang" >{{ __('app.about') }}</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="buttons">
            <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
            <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
          </div>
        </div>
      </header>
      <main>
        <section class="about_container">
            <div class="container">
                  <div class="about_card">
                    <img class="about_img" src="{{ asset('images/static_img/about_logo.png') }}" alt="" />
                    <div class="about_card_text aos-init" data-aos="zoom-in-up">
                        <h4 class="about_subtitle lang" >{{ __('app.about') }}</h4>
                        <p class="about_text lang" >{{ __('app.text_about1') }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_container">
          <div class="container">
            <div class="about_card_green">
              <img class="about_img" src="{{ asset('images/static_img/about_logo.png') }}" alt="" />
              <div class="about_card_text aos-init" data-aos="">
                  <h4 class="about_subtitle lang" >{{ __('app.text_about2') }}</h4>
                  <p class="about_text lang" key="" id="about_text"></p>
              </div>
          </div>
          </div>
      </section>
      <section class="about_container">
        <div class="container">
              <div class="about_card">
                <img class="about_img" src="{{ asset('images/static_img/about_logo.png') }}" alt="" />
                <div class="about_card_text aos-init" data-aos="zoom-in-up">
                    <h4 class="about_subtitle lang" >{{ __('app.text_about4') }}</h4>
                    <p class="about_text lang" >{{ __('app.text_about5') }}</p>
                    <p class="about_text lang" >{{ __('app.text_about6') }}</p>
                    <p class="about_text lang" >{{ __('app.text_about7') }}</p>
                    <p class="about_text lang" >{{ __('app.text_about8') }}</p>
                    <p class="about_text lang" >{{ __('app.text_about9') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about_container">
      <div class="container">
            <div class="about_card_green">
              <img class="about_img" src="{{ asset('images/static_img/about_logo.png') }}" alt="" />
              <div class="about_card_text aos-init" data-aos="zoom-in">
                  <h4 class="about_subtitle lang" >{{ __('app.text_about10') }}</h4>
                  <p class="about_text lang" >{{ __('app.text_about11') }}</p>
                  <p class="about_text lang" >{{ __('app.text_about12') }}</p>
                  <p class="about_text lang" >{{ __('app.text_about13') }}</p>
                  <p class="about_text lang" >{{ __('app.text_about14') }}</p>
              </div>
          </div>
      </div>
    </section>
    <section class="about_container">
      <div class="container">
            <div class="about_card">
              <img class="about_img" src="{{ asset('images/static_img/about_logo.png') }}" alt="" />
              <div class="about_card_text aos-init" data-aos="zoom-in-up">
                  <h4 class="about_subtitle lang" >{{ __('app.text_about15') }}</h4>
                  <p class="about_text lang" >{{ __('app.text_about16') }}</p>
              </div>
          </div>
      </div>
    </section>
    <section class="about_container">
      <div class="container">
            <div class="about_card_green">
              <img class="about_img" src="{{ asset('images/static_img/about_logo.png') }}" alt="" />
              <div class="about_card_text aos-init" data-aos="">
                  <h4 class="about_subtitle lang" >{{ __('app.text_about17') }}</h4>
                  <p class="about_text lang" id="about_text2">{{ __('app.text_about18') }}</p>
              </div>
          </div>
      </div>
    </section>

@endsection
