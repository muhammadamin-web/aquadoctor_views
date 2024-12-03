{{-- resources/views/tags/filtered_by_tag.blade.php --}}
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
<link rel="stylesheet" href="{{ asset('css/all_article_page.css') }}"  />
@endsection

@section('content')


<section class="section" >
        <div class="container">
            <div class="container_section">
                <div class="section_card1">
                    <h1 class="section_card1_text1  " ><p class="lang" style="color: #5050FE !important;">{{ __('app.all_article_text1.1') }}</p> <p class="lang" >{{ __('app.all_article_text1.2') }}</p></h1>
                    <div class="section_card1_text2">
                        <p class="card1_text lang" >{{ __('app.all_article_text2') }}</p>
                        <p class="card1_text lang"  key=""> </p>
                        <p class="card1_text lang" >{{ __('app.section1_text4') }}</p>
                    </div>
                    <div class="section_card1_text3">
                        <button class="nav_button1"><a href="tel:+998938091644" class="lang btn_hover" >{{ __('app.section1_text5') }}</a></button>
                        <a class="card1_text3" href="tel:+998938091644">(93) 809-16-44</a>
                    </div>
                </div>
                
                <div class="section_card2">
                    <!-- <img src="imgs/section1-img.png" alt=""> -->
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        
        <div class="container">
        <h1 class="first_block1_title" style="margin-bottom: 50px;"><span>{{ __('app.filtered_by_tag') }}:</span> <span style="color: #5050FE !important;">#{{ $tag->{'name_' . app()->getLocale()} }}</span></h1>

            <div class="content_box">
                
            @forelse($crudTwos as $crudTwo)

                <a href="{{ route('posts.show', ['locale' => app()->getLocale(), 'slug' => $crudTwo->{'slug_' . app()->getLocale()}]) }}" class="content_card">
                        <img src="{{ asset($crudTwo->image_path) }}" class="content_card_img" alt="" />
                        <div class="content_text_card">
                            <p href="" class="lang" >{{ $crudTwo->{'name_' . app()->getLocale()} }}</p>
                           
                        </div>
                        <div class="connect_link_card" >
                                <img src="{{ asset('images/static_img/calendar-249.png') }}" alt="" />
                                <h2>{{$crudTwo->created_at_formatted}}</h2>
                            </div>
                </a>     
                @endforeach

            </div>
        </div>
    </section>



<div class="container">
  
</div>
@endsection
