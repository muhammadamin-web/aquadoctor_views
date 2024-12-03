<nav class="nav">
        <input type="checkbox" id="check">
        <div class="container">
            <div class="nav_box">
                <div class="nav_logo">
                <a href="{{ route('home',[app()->getLocale()]) }}" class=" " > <img src="{{ asset('images/static_img/logo.png') }}" alt="" / /></a>
                </div>
                <label class="open_btn" for="check"><i class="  fa fa-bars"></i></label>
                <ul class='nav_list'>
                    <label class="close_btn"><i class="fa fa-close"></i></label>
                    <li><a href="{{ route('home',[app()->getLocale()]) }}#about" class="nav_link lang" >{{ __('app.about1') }}</a></li>
                    <li><a href="{{ route('product',[app()->getLocale()]) }}" class="nav_link lang" >{{ __('app.products') }}</a></li>
                    <li><a href="{{ route('category',[app()->getLocale()]) }}" class="nav_link lang" >{{ __('app.categories1') }}</a></li>
                    <!-- <li><a href="{{ route('home',[app()->getLocale()]) }}#news" class="nav_link lang" >{{ __('app.new') }}</a></li>
                    <li><a href="{{ route('sertificates',[app()->getLocale()]) }}" class="nav_link lang" >{{ __('app.sertifikat') }}</a></li> -->
                    <li><a href="{{ route('calculator',[app()->getLocale()]) }}" class="nav_link lang" >{{ __('app.calcul') }}</a></li>
                    <li><a href="#footer" class="nav_link lang scroll-link" >{{ __('app.contact') }}</a></li>
                    <div class="nav_lang">
                    @foreach (config('app.available_locales') as $index => $locale)
                    @if ($locale === app()->getLocale())
                        <p class="lang-button active_lang" onclick="switchLocale('{{ $locale }}')">{{ strtoupper($locale) }}</p>
                        @else
                        <p class="lang-button"onclick="switchLocale('{{ $locale }}')">{{ strtoupper($locale) }}</p>
                        @endif
                        @endforeach
                    </div>
                </ul>
            </div>
        </div>
        <img src="{{ asset('images/static_img/nav_bottom.png') }}" class="nav_bottom" alt="" />
    </nav>