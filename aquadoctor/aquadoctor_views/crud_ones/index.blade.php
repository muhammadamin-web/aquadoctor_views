@extends('layouts.app')
@section('meta')
<title>{{ config('app.site_name') }} - {{ config('app.crud_one_name') }} </title>

<!-- Qo'shimcha SEO va sayt optimallashtirish uchun taglar -->
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/static_img/icon.png') }}">
<link rel="manifest" href="/path/to/your/site.webmanifest">
<link rel="mask-icon" href="{{ asset('images/static_img/icon.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ asset('images/static_img/icon.ico') }}">
<!-- Qo'shimcha uslublar va scriptlar --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/all_portfolio_page.css') }}"  />
@endsection


@section('content')

<section class="section">
        <div class="container">
            <div class="container_section">
                <div class="section_card1">
                    <h1 class="section_card1_text1  "  > <p class="lang" style="color: #5050FE !important;">{{ __('app.all_portfolio_text1.1') }}</p> <p class="lang" >{{ __('app.all_portfolio_text1.2') }}</p></h1>
                    <div class="section_card1_text2">
                        <p class="card1_text lang" >{{ __('app.all_portfolio_text2') }}</p>
                        <p class="card1_text lang" >{{ __('app.section1_text3') }}</p>
                        <p class="card1_text lang" >{{ __('app.section1_text4') }}</p>
                    </div>
                    <div class="section_card1_text3">
                        <button class="nav_button1"><a href="tel:+998938091644" class="lang btn_hover" >{{ __('app.section1_text5') }}</a></button>
                        <a class="card1_text3" href="tel:+998938091644">(93) 809-16-44</a>
                    </div>
                </div>
                
                <div class="section_card2">
                    <img src="{{ asset('images/static_img/section1-img.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <div class="our_works"> 
        <div class="container">
            <div class="works_text">
                <h2 class="lang" >{{ __('app.all_portfolio_text3') }}</h2>
                <p class="works_text_1 lang" >{{ __('app.all_portfolio_text4') }}</p>
            </div>
            <div class="our_wors_container">
            @foreach($crud_ones as $project)

                <div class="our_wroks_content">
                    <div class="wroks_content_img">
                        <a href="{{ route('projects.show', ['locale' => app()->getLocale(), 'slug' => $project->{'slug_' . app()->getLocale()}]) }}" >
                            <div class="work_link_box"> 
                                <div class="work_link_card1">
                                @foreach ($project->relatedTours()->take(2) as $product)

                                <p class="work-link-text">{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</p>
                                @endforeach

                                </div>
                                <div class="work_link_card1">
                                <p class="work-link-text">{{ Str::limit($project->site_name, 20) }}</p>
                                </div>
                            </div>

                            <img src="{{ asset($project->image_path) }}" alt="" />

                        </a>
                    </div>
                </div>
                @endforeach

              
  
            </div>
        </div>
    </div>

    <div class="section2-4">
        <div class="container">
            <div class="section2-4_box">
                <div class="section2_card1">
                    <h4 > <h4 class="lang" >{{ __('app.all_portfolio_text5.1') }}</h4> <h4 class="lang" style="color: #5050FE;">{{ __('app.all_portfolio_text5.2') }}</h4> </h4>
                    <p class="lang" >{{ __('app.all_portfolio_text6') }}</p>
                    <div  class=" section2-4_button lang btn_hover"  onclick="openNav('myModal')">{{ __('app.all_portfolio_text7') }}</div>
                </div>
                <div class="section2_card2">
                    <img src="{{ asset('images/static_img/section1-img.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <section class="comments" id="comments">
        <div class="container">
            <h2 class="comment_title lang" >{{ __('app.comment_text1') }}</h2>
            <div class="comment_box">
            @foreach($client_comments as $client_comment)

                <div class="comment_card">
                    <div class="comment_card_subtitle">
                        <h4 class="comment_subtitle lang" >{!! $client_comment->{'comment_' . app()->getLocale()} !!}</h4>   
               
                    </div>
                    <div class="comment_img_box">
                        <img style="width: 80px;" src="{{ asset($client_comment->image_path) }}" alt="" />
                        <p class="comment_img_text lang" >{{ Str::limit($client_comment->{'name_' . app()->getLocale()}, 100) }}</p>
                    </div>
                </div>
                @endforeach

            

            </div>
        </div>
    </section>
<!-- 
<section class="intro">
        <div class="intro_box">
            <div class="intro_card">
                <h2 class="intro_title lang">{{ __('app.intro_text8') }}</h2>
                <div class="intro_link_card">
                    <a href="/index.html" class="intro_link lang">{{ __('app.intro_text2') }}</a>
                    <p class="intro_link " >></p>
                </div>
                
            </div>
            <img src="{{ asset('images/static_img/img_slider2.jpg') }}" alt="" />
        </div>
    </section>

    <section class="new_container" id="news">
        <div class="container">
            <h2 class="container_title lang">{{ __('app.new') }}</h2>
            <div class="new_box">
            @foreach($crud_ones as $item)

                    <a href="{{ route('projects.show', ['locale' => app()->getLocale(), 'slug' => $item->{'slug_' . app()->getLocale()}]) }}" class="new_link ">
                        <div  class="new_card ">
                            <img class="new_card_img" src="{{ asset($item->image_path) }}" alt="" />
                            <div class="new_card_text1">
                                <div class="text_row1">
                                    <h2>{{ $item->{'name_' . app()->getLocale()}  }}</h2>
                                </div>
                                <div class="text_row2">
                                    <a class="row2_link" href="tel:+998972680088">+998(97)268-00-88</a>
                                </div>
                            </div>
                            <div class="new_card_text3">
                                <h2 class="new_subtitle1">{{ $item->{'name_' . app()->getLocale()}  }}</h2>
                                <p class="new_subtitle2">{{ $item->{'meta_description_' . app()->getLocale()}  }}</p>
                                <div class="new_card_text2">
                                    <a href="{{ route('projects.show', ['locale' => app()->getLocale(), 'slug' => $item->{'slug_' . app()->getLocale()}]) }}">{{ __('app.more') }}</a>
                                    <div class="new_card_icon">
                                        <img class="" src="{{ asset('images/static_img/calendar-249.png') }}" alt="" />
                                        <p>{{ $item->created_at_formatted }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                    @endforeach


    
        </div>
    </section>




</div> -->



@endsection