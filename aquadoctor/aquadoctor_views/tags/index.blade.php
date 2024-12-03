@extends('layouts.app')
@section('meta')

<title>{{ config('app.site_name') }} - {{ __('app.tags') }}</title>


<link rel="stylesheet" href="{{ asset('css/tegs.css') }}">
<link rel="stylesheet" href="{{ asset('css/all_article_page.css') }}">

@endsection
@section('content')
<div class="container" style="margin-top: 200px;">
<h3 class="first_block1_title lang" style="margin-bottom: 30px;"> {{ __('app.tags') }}</h1>
    <form id="tags-search-form" action="{{ route('tags.all_filter',[app()->getLocale()]) }}" method="GET">

        <div>
            <input class="modal_input order_input search_input" type="text" id="visible-tags-input" readonly>
            <button  type="submit" class="tegs_link search_button">{{ __('app.search') }}</button>
        </div>

        <input type="hidden" id="search-tags-input" name="tags">
        <div class="tag_button_box">
        @foreach ($tags as $tag)
      
        <button type="button" class="tag tegs_link" data-tag-slug="{{ $tag->{'slug_' . app()->getLocale()} }}" data-tag-name="{{ $tag->{'name_' . app()->getLocale()} }}">
            {{ $tag->{'name_' . app()->getLocale()} }}
        </button>
        @endforeach
        </div>
    </form>
</div>
<section class="content">
        <div class="container">
            <div class="content_box">
            @foreach($crud_twos_all as $posts)

                <a href="{{ route('posts.show', ['locale' => app()->getLocale(), 'slug' => $posts->{'slug_' . app()->getLocale()}]) }}" class="content_card">
                        <img src="{{ asset($posts->image_path) }}" class="content_card_img" alt="" />
                        <div class="content_text_card">
                            <p href="" class="lang" >{{ Str::limit($posts->{'name_' . app()->getLocale()}, 50) }}</p>
                            <div class="connect_link_card">
                                <img src="{{ asset('images/static_img/calendar-249.png') }}" alt="" />
                                <h2>{{$posts->created_at_formatted}}</h2>
                            </div>
                        </div>
                </a>     
                @endforeach

            </div>
        </div>
    </section>

@endsection