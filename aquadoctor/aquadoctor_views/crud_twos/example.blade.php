@extends('layouts.app')
@section('meta')

<title>{{ config('app.site_name') }} - {{ $crud_two->{'name_' . app()->getLocale()} }}</title>
<meta name="keywords" content="{{ $crud_two->{'tags_' . app()->getLocale()} }}">
<meta name="description" content="{{ $crud_two->{'description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $crud_two->{'name_' . app()->getLocale()}  }}">
<meta property="og:description" content="{{ $crud_two->{'description_' . app()->getLocale()} }}">
<meta type="image/jpeg" name="link" href="{{ asset($crud_two->image_path) }}" rel="image_src">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="Tourfetto - Международное туристическое агентство, Туры по всему миру">
<meta property="twitter:description" content="Tourfetto - ваш путеводитель в мир международных путешествий. Откройте удивительные туры по всему миру.">
<meta property="twitter:image" content="URL_изображения_тура_или_агентства_Tourfetto">
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
<link rel="stylesheet" href="{{ asset('css/all_news_page.css') }}" />
<link rel="stylesheet" href="{{ asset('css/portfolio_page2.css') }}" />
@endsection


@section('content')
<!-- 
<section class="services">
        <div class="container">
            <h2 class="services_title lang" >{{ $crud_two->{'name_' . app()->getLocale()} }}</h2>
            <div class="services_box">
                <div class="services_card1">
                    <img src="{{ asset($crud_two->image_path) }}" alt="" />
                </div>
                <div class="services_card2">
                    <div class="services_row1">
                        <h2 class="services_row1_title1 lang" >{{ __('app.portfolio_text1') }}</h2>
                        @foreach ($crud_two->relatedTours() as $product)

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
    </section> -->


    <section class="kpi_about">
        <div class="container">
            <div class="kpi_about_box1">
                <div class="kpi_about_card1">
                    <h2 class="kpi_card1_text1 lang" >{{ __('app.all_article_text3') }}</h2>
                    <div class="connect_link_card">
                        <img src="{{ asset('images/static_img/calendar-249.png') }}" alt="" />
                        <h2 class="kpi_card1_text2">Dekabr 19, 2023</h2>
                    </div>
                </div>
                <div class="kpi_about_card2">
                    <img src="{{ asset('images/static_img/kpi.png') }}" alt="" />
                </div>
            </div>
            <div class="border"></div>
            <div class="kpi_about_box2">
                <div class="about_box2_card1">
                    <h2 class="card2_text1 lang" >{{ __('app.article_text1') }}</h2>
                    <p class="card2_text2 lang" >{{ __('app.article_text2') }}</p>

                </div>
                <div class="services_row2">
                    <h2 class="services_row2_title1 lang" >{{ __('app.service_text5') }}</h2>
                    <a href="" class="services_row2_link lang" >{{ __('app.service_text6') }}</a>
                    <a href="" class="services_row2_link lang" >{{ __('app.service_text7') }}</a>
                    <a href="" class="services_row2_link lang" >{{ __('app.service_text8') }}</a>
                    <a href="" class="services_row2_link lang" >{{ __('app.service_text9') }}</a>
                    <a href="" class="services_row2_link lang" >{{ __('app.service_text10') }}</a>
                    <a href="" class="services_row2_link lang" >{{ __('app.service_text11') }}</a>
                    <div class="services_row2_card">
                        <img src="{{ asset('images/static_img/footer-phone.png') }}" alt="" />
                        <a href="tel:+998938091644" class="services_row2_link1">+998 (93) 809-16-44</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="content_box1">
                <img src="{{ asset('images/static_img/logo3.jpg') }}" alt="" />
                <h3 class="box1_text lang" >{{ __('app.article_text3') }}</h3>
                <a class="box1_link lang" href="tel:+998938091644">{{ __('app.article_text4') }}</a>
            </div>
            <div class="content_box3">
                <h3 class="tag_title lang" >{{ __('app.tag_text1') }}</h3>
                <div class="tags_link_card1">
                    <a href="tag_page.html" class="tags_link lang" >{{ __('app.tag_text2') }}</a>
                    <a href="tag_page.html" class="tags_link lang" >{{ __('app.tag_text3') }}</a>
                    <a href="tag_page.html " class="tags_link lang" >{{ __('app.tag_text4') }}</a>
                </div>
                <div class="tags_link_card2">
                    <a href="#!" class="tag_icon">
                        <i class='fab fa-facebook-f ' style='font-size:24px'></i>
                    </a>
                    <a href="#!" class="tag_icon">
                        <i class='fab fa-telegram-plane ' style='font-size:24px'></i>
                    </a>
                    <a href="#!" class="tag_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" >
                            <g clip-path="url(#clip0_102_140)">
                            <path class="tag_link11" d="M7.27781 29.9999C5.36133 30 3.55149 29.2405 2.15515 27.8443C0.69306 26.3821 -0.0706497 24.4664 0.00458456 22.4499C0.0823383 20.3673 1.02318 18.3667 2.72544 16.6645L5.79035 13.5871C6.24703 13.1285 6.989 13.1269 7.44762 13.5837C7.90617 14.0404 7.90775 14.7824 7.45101 15.2409L4.38446 18.3201C1.89944 20.8051 1.66495 24.0394 3.81253 26.187C5.96016 28.3347 9.19447 28.1002 11.6777 25.6168L15.8898 21.4046C17.1665 20.128 17.8705 18.6702 17.9258 17.1891C17.9765 15.8315 17.4559 14.5353 16.4601 13.5395C16.1264 13.2059 15.7572 12.9227 15.3627 12.698C14.8003 12.3777 14.6041 11.6621 14.9244 11.0998C15.2448 10.5374 15.9604 10.3412 16.5227 10.6615C17.0991 10.9898 17.6356 11.4006 18.1174 11.8823C19.5795 13.3444 20.3432 15.2601 20.268 17.2766C20.1902 19.3592 19.2494 21.3598 17.5471 23.062L13.335 27.2741C11.6327 28.9764 9.63216 29.9172 7.54957 29.995C7.45887 29.9982 7.3681 29.9999 7.27781 29.9999ZM15.0747 18.9002C15.3951 18.3378 15.1988 17.6222 14.6365 17.3019C14.242 17.0772 13.8727 16.7941 13.5391 16.4605C11.3915 14.3129 11.626 11.0786 14.1093 8.59524L18.3214 4.38318C20.8048 1.89992 24.039 1.66537 26.1866 3.81294C28.3341 5.96052 28.0996 9.19483 25.6146 11.6798L22.5481 14.759C22.0913 15.2176 22.0929 15.9596 22.5515 16.4163C23.01 16.873 23.752 16.8714 24.2087 16.4129L27.2737 13.3354C28.9759 11.6331 29.9167 9.63258 29.9945 7.55005C30.0697 5.53355 29.306 3.61777 27.8439 2.15568C26.3818 0.693534 24.4651 -0.0700587 22.4496 0.00505842C20.367 0.0828122 18.3664 1.02365 16.6642 2.72591L12.452 6.93798C10.7498 8.64024 9.809 10.6408 9.73119 12.7233C9.65595 14.7398 10.4197 16.6556 11.8817 18.1178C12.3634 18.5994 12.9 19.0101 13.4765 19.3385C13.6595 19.4427 13.8588 19.4923 14.0554 19.4923C14.4628 19.4923 14.8587 19.2794 15.0747 18.9002Z" />
                            </g>
                            <defs>
                            <clipPath id="clip0_102_140">
                            <rect width="30" height="30" fill="black"/>
                            </clipPath>
                            </defs>
                            </svg>
                    </a>
                </div>
                <a href="tags.html" class="tags_link1 btn_hover lang" >{{ __('app.all_tags') }}</a>
            </div>
            <h2 class="article_title lang" >{{ __('app.article_title1') }}</h2>
            <div class="content_box2">
                <a href="#!" class="content_card">
                        <img src="{{ asset('images/static_img/kpi.png') }}" alt="" />
                        <div class="content_text_card">
                            <p href="" class="lang" >{{ __('app.all_article_text3') }}</p>
                            <div class="connect_link_card">
                                <img src="{{ asset('images/static_img/calendar-249.png') }}" alt="" />
                                <h2>Dekabr 19, 2023</h2>
                            </div>
                        </div>
                </a>
                <a href="#!" class="content_card">
                    <img src="{{ asset('images/static_img/kpi.png') }}" alt="" />
                    <div class="content_text_card">
                        <p href="" class="lang" >{{ __('app.all_article_text3') }}</p>
                        <div class="connect_link_card">
                            <img src="{{ asset('images/static_img/calendar-249.png') }}" alt="" />
                            <h2>Dekabr 19, 2023</h2>
                        </div>
                    </div>
            </a>
            <a href="#!" class="content_card">
                <img src="{{ asset('images/static_img/kpi.png') }}" alt="" />
                <div class="content_text_card">
                    <p href="" class="lang" >{{ __('app.all_article_text3') }}</p>
                    <div class="connect_link_card">
                        <img src="{{ asset('images/static_img/calendar-249.png') }}" alt="" />
                        <h2>Dekabr 19, 2023</h2>
                    </div>
                </div>
        </a>
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
    <h1 class="description_title lang">{{ $crud_two->{'name_' . app()->getLocale()}  }}</h1>
    <div class="new_description_box">
      <img src="{{ asset($crud_two->image_path) }}" alt="">
      <p class="lang">{!! $crud_two->{'description_' . app()->getLocale()} !!}</p>
    </div>
  </div>
</section>


<section class="new_container" id="news">
  <div class="container">
    <h2 class="container_title lang">{{ __('app.news_text4') }}</h2>
    <div class="new_box">
      @foreach($crud_twos_footer as $news)

      <a href="{{ route(config('app.crud_two') . '.show', ['locale' => app()->getLocale(), 'slug' => $crud_two->{'slug_' . app()->getLocale()}]) }}" class="new_link ">
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