@extends('layouts.app')
@section('meta')
<link rel="stylesheet" href="{{ asset('css/calculator.css') }}">
<style>
    .products_title{
        color: black;
        padding-top: 150px;
    }
    @media (max-width: 1200px)
{
    .products_title{
        color: black;
        padding-top: 120px;
        font-size: 24px;
        line-height: 1.4;
    }
}
</style>
@endsection

@section('content')

<!-- <div class="main-carousel" id="home">
    <div class="carousel">
        <div class="items">
            <div class="img_card carousel-image current">
                <img src="{{ asset('images/static_img/slider.png') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.calcul') }}</h3>
                </div>
            </div>

            <div class="img_card carousel-image ">
                <img src="{{ asset('images/static_img/slider2.png') }}" alt="" class=" " / />
                <div class="img_text">
                    <h3 class="lang">{{ __('app.calcul') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
        <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
    </div>
</div> -->
<section class="calcul">
    <div class="container">
    <h3 class="products_title lang" style="color:black;">{{ __('app.calcul1') }}</h3>

        <div class="calcul_box">
            <div class="calcul_box_card">
                <div class="calcul_card">
                    <p class="calcul_input_text lang">{{ __('app.calcul2') }}</p>
                    <input class="calcul_input" type="number" id="clean">
                </div>
                <div class="calcul_card">
                    <p class="calcul_input_text lang">{{ __('app.calcul3') }}</p>
                    <input class="calcul_input" type="number" id="clean_want">
                </div>
                <div class="calcul_card">
                    <p class="calcul_input_text lang">{{ __('app.calcul4') }}</p>
                    <input class="calcul_input" type="number" id="cube">
                </div>
                <div class="btn_card">
                    <button class="btn_clear lang">{{ __('app.calcul5') }}</button>
                    <button class="btn_calcul lang">{{ __('app.calcul6') }}</button>
                </div>
                <div class="calcul_reply_card">
                    <h2 class="reply_text lang">{{ __('app.calcul7') }}</h2>
                    <p class="amount">0</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="{{ asset('js/calculator.js') }}" type="text/javascript"></script>

@endsection