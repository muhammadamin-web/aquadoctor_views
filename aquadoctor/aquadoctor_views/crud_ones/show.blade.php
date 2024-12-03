@extends('layouts.app')
@section('meta')

<title>{{ config('app.site_name') }} - {{ $crud_one->{'name_' . app()->getLocale()} }}</title>
<meta name="keywords" content="{{ $crud_one->{'tags_' . app()->getLocale()} }}">
<meta name="description" content="{{ $crud_one->{'description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $crud_one->{'name_' . app()->getLocale()}  }}">
<meta property="og:description" content="{{ $crud_one->{'description_' . app()->getLocale()} }}">
<meta type="image/jpeg" name="link" href="{{ asset($crud_one->image_path) }}" rel="image_src">

<!-- Qo'shimcha SEO va sayt optimallashtirish uchun taglar -->
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/static_img/icon.png') }}">
<link rel="manifest" href="/path/to/your/site.webmanifest">
<link rel="mask-icon" href="{{ asset('images/static_img/icon.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ asset('images/static_img/icon.ico') }}">
<title>Tourfetto - {{ $crud_one->{'meta_name_' . app()->getLocale()}  }}</title>
<!-- Qo'shimcha uslublar va scriptlar -->



<meta name="keywords" content="{{ $crud_one->{'tags_' . app()->getLocale()} }}">
<meta name="description" content="{{ $crud_one->{'meta_description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $crud_one->{'name_' . app()->getLocale()} }}">
<meta property="og:description" content="{{ $crud_one->{'meta_description_' . app()->getLocale()} }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500&display=swap" rel="stylesheet">
<title>{{ config('app.site_name') }} - {{ $crud_one->{'name_' . app()->getLocale()} }}</title>
<link rel="stylesheet" href="{{ asset('css/all_news_page.css') }}" />
<link rel="stylesheet" href="{{ asset('css/portfolio_page2.css') }}" />
@endsection


@section('content')

<section class="services">
        <div class="container">
            <h2 class="services_title lang" ><a class="services_title" href="{{ $crud_one->site_url }}">{{ $crud_one->{'name_' . app()->getLocale()} }}</a></h2>
            <div class="services_box">
                <div class="services_card1">
                    <img src="{{ asset($crud_one->image_path) }}" alt="" />
                </div>
                <div class="services_card2">
                    <div class="services_row1">
                        <h2 class="services_row1_title1 lang" >{{ __('app.portfolio_text1') }}</h2>
                        @foreach ($crud_one->relatedTours() as $product)

                        <a href="{{ route('service', ['locale' => app()->getLocale()]) }}" class="services_row1_title2 lang" >{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</a>
                        @endforeach

                    </div>
                    <div class="services_row2">
                        <h2 class="services_row2_title1 lang" >{{ __('app.portfolio_text4') }}</h2>
                        <a href="{{ route('service', ['locale' => app()->getLocale()]) }}" class="services_row2_link lang" >{{ __('app.portfolio_text5') }}</a>
                        <a href="{{ route('service', ['locale' => app()->getLocale()]) }}" class="services_row2_link lang" >{{ __('app.portfolio_text6') }}</a>
                        <a href="{{ route('service', ['locale' => app()->getLocale()]) }}" class="services_row2_link lang" >{{ __('app.portfolio_text7') }}</a>
                        <a href="{{ route('service', ['locale' => app()->getLocale()]) }}" class="services_row2_link lang" >{{ __('app.portfolio_text8') }}</a>
                        <a href="{{ route('service', ['locale' => app()->getLocale()]) }}" class="services_row2_link lang" >{{ __('app.portfolio_text9') }}</a>
                        <a href="{{ route('service', ['locale' => app()->getLocale()]) }}" class="services_row2_link lang" >{{ __('app.portfolio_text10') }}</a>
                        <div class="services_row2_card">
                            <img src="{{ asset('images/static_img/footer-phone1.png') }}" alt="">
                            <a href="tel:+998938091644" class="services_row2_link1">+998 (93) 809-16-44</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- <section class="intro">
  <div class="intro_box">
    <div class="intro_card">
      <h2 class="intro_title lang">{{ __('app.intro_text4') }}</h2>
      <div class="intro_link_card">
        <a href="{{ route('home',[app()->getLocale()]) }}" class="intro_link lang">{{ __('app.intro_text2') }}</a>
        <p h class="intro_link ">></p>
      </div>
    </div>
    <img src="{{ asset('images/static_img/img_slider3.jpg') }}" alt="" />
  </div>
</section>


<section class="new_description">
  <div class="container">
    <h1 class="description_title lang">{{ $crud_one->{'name_' . app()->getLocale()}  }}</h1>
    <div class="new_description_box">
      <img src="{{ asset($crud_one->image_path) }}" alt="">
      <p class="lang">{!! $crud_one->{'description_' . app()->getLocale()} !!}</p>
    </div>
  </div>
</section>


<section class="new_container" id="news">
  <div class="container">
    <h2 class="container_title lang">{{ __('app.news_text4') }}</h2>
    <div class="new_box">
      @foreach($crud_ones_footer as $news)

      <a href="{{ route(config('app.crud_one') . '.show', ['locale' => app()->getLocale(), 'slug' => $crud_one->{'slug_' . app()->getLocale()}]) }}" class="new_link ">
        <div class="new_card ">
          <img class="new_card_img" src="{{ asset($news->image_path) }}" alt="" />
          <div class="new_card_text1">
            <div class="text_row1">
              <h2>{{ Str::limit($news->{'name_' . app()->getLocale()}, 20) }}</h2>
            </div>
            <div class="text_row2">
              <a class="row2_link" href="tel:+998972680088">+998(97)268-00-88</a>
            </div>
          </div>
          <div class="new_card_text3">
            <h2 class="new_subtitle1">{{ Str::limit($news->{'name_' . app()->getLocale()}, 20) }}</h2>
            <p class="new_subtitle2">{{ Str::limit($news->{'meta_description_' . app()->getLocale()}, 50) }}</p>
            <div class="new_card_text2">
              <div class="new_card_icon">
                <img class="" src="{{ asset('images/static_img/calendar-249.png') }}" alt="" />
                <p>{{ $news->created_at_formatted }}</p>
              </div>
            </div>
          </div>

        </div>
      </a>
      @endforeach




    </div>
</section> -->



<!-- old _version-->
<script src="//use.fontawesome.com/0a5f10fda5.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="{{ asset('js/banner_slider.js') }}"></script>
@endsection