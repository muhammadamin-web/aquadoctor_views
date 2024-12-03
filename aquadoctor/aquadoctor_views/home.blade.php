@extends('layouts.app')
@section('meta')

<title>Aquadoctor -  {{ __('app.index_slider') }}</title>


<!-- Qo'shimcha SEO va sayt optimallashtirish uchun taglar -->
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/static_img/icon.png') }}">
<link rel="mask-icon" href="{{ asset('images/static_img/favicon.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ asset('images/static_img/favicon.ico') }}">
<!-- Qo'shimcha uslublar va scriptlar -->
<!-- Qo'shimcha uslublar va scriptlar -->



@endsection
@section('navbar')

@endsection

@section('content')
<div class="main-carousel" id="home">
    <div class="carousel">
        <div class="items">
            <div class="img_card carousel-image current">
                <img load="lazy" src="{{ asset('images/static_img/banner1.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.index_slider') }}</h3>
                </div>
            </div>

            <div class="img_card carousel-image ">
                <img load="lazy" src="{{ asset('images/static_img/banner2.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.index_slider') }}</h3>
                </div>
            </div>

            <div class="img_card carousel-image ">
                <img load="lazy" src="{{ asset('images/static_img/banner3.jpg') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.index_slider') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
        <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
    </div>
</div>
<section class="about" id="about">
    <div class="container">
        <h2 class="about_title lang">{{ __('app.about1') }}</h2>
        <div class="about_box">
            <div class="about_card">
                <p class="about_text lang">{{ __('app.about2') }}</p>
                <p class="about_text lang">{{ __('app.about3') }}</p>
                <p class="about_text lang">{{ __('app.about4') }}</p>
                <p class="about_text lang">{{ __('app.about5') }}</p>
                <p class="about_text lang">{{ __('app.about6') }}</p>
                <p class="about_text lang">{{ __('app.about7') }}</p>
            </div>
            <img load="lazy" src="{{ asset('images/static_img/about_image.png') }}" alt="" class="about_img" / />
        </div>
    </div>
</section>
<section class="facilities">
    <div class="container">
        <h2 class="facilities_title lang">{{ __('app.facilities1') }}</h2>
        <div class="facilities_box">
            <img load="lazy" src="{{ asset('images/static_img/whats_our.jpg') }}" alt="" class="facilities_img" / />
            <div class="facilities_box_card">
                <div class="facilities_card">
                    <div class="facilities_icon">
                        <img load="lazy" src="{{ asset('images/static_img/icon1.svg') }}" alt="" />
                    </div>
                    <div class="facilities_card_text">
                        <h4 class="facilities_subtitle lang">{{ __('app.facilities2') }}</h4>
                        <p class="facilities_text lang">{{ __('app.facilities3') }}</p>
                    </div>
                </div>
                <div class="facilities_card">
                    <div class="facilities_icon">
                        <img load="lazy" src="{{ asset('images/static_img/icon4.svg') }}" alt="" />

                    </div>
                    <div class="facilities_card_text">
                        <h4 class="facilities_subtitle lang">{{ __('app.facilities4') }}</h4>
                        <p class="facilities_text lang">{{ __('app.facilities5') }}</p>
                    </div>
                </div>
                <div class="facilities_card">
                    <div class="facilities_icon">
                        <img load="lazy" src="{{ asset('images/static_img/icon2.svg') }}" alt="" />
                    </div>
                    <div class="facilities_card_text">
                        <h4 class="facilities_subtitle lang">{{ __('app.facilities6') }}</h4>
                        <p class="facilities_text lang">{{ __('app.facilities7') }}</p>
                    </div>
                </div>
                <div class="facilities_card">
                    <div class="facilities_icon">
                        <img load="lazy" src="{{ asset('images/static_img/icon5.svg') }}" alt="" />
                    </div>
                    <div class="facilities_card_text">
                        <h4 class="facilities_subtitle lang">{{ __('app.facilities8') }}</h4>
                        <p class="facilities_text lang">{{ __('app.facilities9') }}</p>
                    </div>
                </div>
                <!-- <div class="facilities_card">
                        <div class="facilities_icon">
                            <img load="lazy" src="{{ asset('images/static_img/icon3.svg') }}" alt="" />
                        </div>
                        <div class="facilities_card_text">
                            <h4 class="facilities_subtitle lang" >{{ __('app.facilities10') }}</h4>
                            <p class="facilities_text lang" >{{ __('app.facilities11') }}</p>
                        </div>
                    </div> -->
                <div class="facilities_card">
                    <div class="facilities_icon">
                        <img load="lazy" src="{{ asset('images/static_img/wallet.png') }}" alt="" />
                    </div>
                    <div class="facilities_card_text">
                        <h4 class="facilities_subtitle lang">{{ __('app.facilities12') }}</h4>
                        <p class="facilities_text lang">{{ __('app.facilities13') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="categories">
    <div class="container">
        <h2 class="categories_title">{{ __('app.categories1') }}</h2>
        <div class="categories_box">
            @foreach($categories as $category)
            @php
            $images = json_decode($category->images, true); // Rasmlar massivi
            @endphp
            <a href="{{ route('category.show', ['locale' => app()->getLocale(), 'slug' => $category->{'slug_' . app()->getLocale()}]) }}" class="categories_card">
                @if(!empty($images) && isset($images[0])) {{-- Birinchi rasm mavjudligini tekshirish --}}
                <img class="categories_img" src="{{ asset($images[0]) }}" alt="" />
                @endif

                <p class="categories_text lang">{{ Str::limit($category->{'name_' . app()->getLocale()}, 50) }}</p>
            </a>
            @endforeach

        </div>
    </div>
</section>
<!-- <section class="products" style="background-image: url('{{ asset('images/static_img/products.png') }}');">
    <h2 class="products_title lang" >{{ __('app.product') }}</h2>
        <div class="container">
            <div class="products_box">
            @foreach($products as $product)
                @php
                $containerNumber = $loop->iteration === 1 || ($loop->iteration - 1) % 5 === 0 ? 1 : 2;
                $images = json_decode($product->images, true); // Rasmlar massivi
                @endphp
                <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="products_card">
                    <img class="products_img" src="{{ asset($images[0]) }}" alt="" />
                    <p class="products_text lang" >{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</p>
                </a>
                @endforeach

            </div>
        </div>
    </section> -->


<section class="products">
    <img load="lazy" src="{{ asset('images/static_img/products.png') }}" alt="" class="bg_product" />
    <div class="container container33">

        <h2 class="products_title lang">{{ __('app.products') }}</h2>
        <div class="products_box">
            @foreach($products as $product)
            @php
            $containerNumber = $loop->iteration === 1 || ($loop->iteration - 1) % 5 === 0 ? 1 : 2;
            $images = json_decode($product->images, true); // Rasmlar massivi
            @endphp
            <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="products_card">
                <img class="products_img" src="{{ asset($images[0]) }}" alt="" />
                <p class="products_text lang">{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</p>
            </a>
            @endforeach

        </div>
    </div>
</section>
<!-- 
    
    <section class="news" id="news">
        <div class="container">
          <div class="news_link_card">
            <h2 class="news_title lang" >{{ __('app.news1') }}</h2>
            <a class="news_link" href="{{ route('posts',[app()->getLocale()]) }}"><span class="lang" >{{ __('app.link') }}</span><img load="lazy" src="{{ asset('images/static_img/prev.svg') }}" alt="" /></a>
          </div>
          <div class="news_box">
          @foreach($crud_two as $posts)

            <a href="{{ route('posts.show', ['locale' => app()->getLocale(), 'slug' => $posts->{'slug_' . app()->getLocale()}]) }}" class="news_card">
              <img class="news_img" src="{{ asset($posts->image_path) }}" alt="" />
              <p class="news_subtitle lang" >{{ Str::limit($posts->{'name_' . app()->getLocale()}, 50) }}</p>
              <p class="news_text lang" >{{ Str::limit($posts->{'meta_description_' . app()->getLocale()}, 50) }}</p>
            </a>
            @endforeach

            <a class="news_link2" href="{{ route('posts',[app()->getLocale()]) }}"><span class="lang" >{{ __('app.link') }}</span><img load="lazy" src="{{ asset('images/static_img/prev.svg') }}" alt="" /></a>
          </div>
        </div>
      </section> -->

@endsection