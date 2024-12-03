@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-6">{{ __('Создать категорию') }}</h2>

            <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name (Russian) -->
                @foreach (config('app.available_locales') as $locale)
                <!-- Name -->
                <div class="form-group">
                    <label for="name_{{ $locale }}">{{ __('Название') }} ({{ $locale }})</label>
                    <input id="name_{{ $locale }}" type="text" class="form-control @error('name_' . $locale) is-invalid @enderror" name="name_{{ $locale }}" value="{{ old('name_' . $locale) }}" required autocomplete="name_{{ $locale }}" autofocus>
                    @error('name_' . $locale)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                 <!-- Meta Description -->
                 <div class="form-group">
                    <label for="meta_description_{{ $locale }}">{{ __('Мета описание') }} ({{ $locale }})</label>
                    <textarea id="meta_description_{{ $locale }}" class="form-control @error('meta_description_' . $locale) is-invalid @enderror" name="meta_description_{{ $locale }}">{{ old('meta_description_' . $locale) }}</textarea>
                    @error('meta_description_' . $locale)
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>


                @endforeach


             <!-- Image Upload -->
             <div class="form-group">
                    <label for="images">Изображения (максимум 3):</label>
                    <div id="drop-area" class="drop-area">
                        <input type="file" name="images[]" id="fileElem" multiple accept="image/*" required onchange="handleFiles(this.files)">
                        <label for="fileElem" id="file-label">Перетащите изображения сюда или нажмите, чтобы выбрать</label>
                        <div id="gallery"></div> <!-- Yangi galeriya qutisi -->
                    </div>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                        {{ __('Cancel') }}
                    </a>
                </div>
            </form>
        </div>
    </div>

</div>
<script src="{{ asset('js/product_image_edit.js') }}" type="text/javascript"></script>

@endsection