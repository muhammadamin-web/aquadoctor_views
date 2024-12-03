@extends('layouts.app')
@section('meta')
<link rel="stylesheet" href="{{ asset('css/sertifikat.css') }}">

@endsection

@section('content')

<div class="main-carousel" id="home">
        <div class="carousel">
            <div class="items">
                <div class="img_card carousel-image current">
                    <img src="{{ asset('images/static_img/slider.png') }}" alt="" class=" " / />
                    <div class="img_text">
                        <h3 class="lang" >{{ __('app.sertifikat') }}</h3>
                    </div>
                </div>

                <div class="img_card carousel-image ">
                    <img src="{{ asset('images/static_img/slider2.png') }}" alt="" class=" " / />
                    <div class="img_text">
                        <h3 class="lang" >{{ __('app.sertifikat') }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttons">
            <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
            <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
        </div>
    </div>

    
    <section class="sertifikat">
        <div class="container">
            <div class="sertifikat_box">
                <a href="#!" class="sertifikat_card" id="btn1">
                    <img src="{{ asset('images/static_img/sertifikat1.png') }}" alt="" class="sertifikat_img" />
                    <p class="sertifikat_text">Сертификат России</p>
                </a>
                <a href="#!" class="sertifikat_card">
                    <img src="{{ asset('images/static_img/sertifikat2.png') }}" alt="" class="sertifikat_img" />
                    <p class="sertifikat_text">Сертификат России</p>
                </a>
                <a href="#!" class="sertifikat_card">
                    <img src="{{ asset('images/static_img/sertifikat3.png') }}" alt="" class="sertifikat_img" />
                    <p class="sertifikat_text">Сертификат России</p>
                </a>
            </div>
        </div>
    </section>
    <div id="modal2" class="modal2">
        <div class="modal-content2">
            <span class="close2">&times;</span>
            <img src="assets/images/sertifikat1.png" alt="" id="modal-img" class="modal-img">
            <p id="modal-text"></p>
        </div>
    </div>
    <script src="{{ asset('js/modal2.js') }}"type="text/javascript" ></script>

@endsection