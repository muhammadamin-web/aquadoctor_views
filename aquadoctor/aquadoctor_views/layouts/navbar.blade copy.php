<nav class="nav">
  <input type="checkbox" id="check">
  <div class="container">
    <div class="nav_box">
      <a href="{{ route('home',[app()->getLocale()]) }}" class="logo">
        <img src="{{ asset('images/static_img/logo.png') }}" alt="" />
      </a>
      <label class="open_btn" for="check"><i class="fa fa-bars"></i></label>
      <ul class="nav_list">
        <label class="close_btn"><i class="fa fa-close"></i></label>
        <li><a href="{{ route('about',[app()->getLocale()]) }}" class="nav_link lang">{{ __('app.about') }}</a></li>
        <li class="nav_item">
          <div class="nav_item_card">
            <a href="#!" class="nav_link dropdown_toggle lang">{{ __('app.category') }}</a>
            <div class="dropdown_content">
              @foreach($categories_additional as $category)
              <a class="nav_link2 lang" href="{{ route('category.show', ['locale' => app()->getLocale(), 'slug' => $category->{'slug_' . app()->getLocale()}]) }}" title="API">{{ $category->{'name_' . app()->getLocale()} }}</a>
              @endforeach
            </div>
          </div>
        </li>
        <li class="nav_item">
          <div class="nav_item_card">
            <a href="#!" class="nav_link dropdown_toggle lang">{{ __('app.product') }}</a>
            <div class="dropdown_content">
              @foreach($products_additional as $product)
              <a class="nav_link2 lang" href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}">{{ $product->{'name_' . app()->getLocale()}  }}</a>
              @endforeach
            </div>
          </div>
        </li>
        <li><a href="{{ route('home',[app()->getLocale()]) }}#comand" class="nav_link lang scroll-link">{{ __('app.comand') }}</a></li>
        <li><a href="{{ route('home',[app()->getLocale()]) }}#news" class="nav_link lang scroll-link">{{ __('app.news') }}</a></li>
        <div class="language-selector">
          <div class="selector_box" onclick="toggleDropdown(event)">
            <div class="selected lang-button" data-lang="{{ app()->getLocale() }}">{{ strtoupper(app()->getLocale()) }}</div>
            <label class="globe" for=""><i class="fa fa-globe"></i></label>
          </div>
          <div class="options" id="languageOptions" style="display: none;">
            @foreach (config('app.available_locales') as $locale)
            @if ($locale !== app()->getLocale())
            <div class="option lang-button" data-lang="{{ $locale }}" onclick="switchLocale('{{ $locale }}')">{{ strtoupper($locale) }}</div>
            @endif
            @endforeach
          </div>
        </div>
        <a href="#contact" class=" nav_contact lang scroll-link">{{ __('app.contact') }}</a>
      </ul>
    </div>
  </div>
</nav>
