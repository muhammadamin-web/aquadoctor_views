@extends('admin.layouts.app')
@section('additional_scripts')
<!-- Select2 JS qo'shish -->

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ __('Создать') . ' ' . config('app.crud_two_text') }}</h2>

            <form method="POST" action="{{ route(config('app.crud_two_admin') . '.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Dynamic locale fields -->
                @foreach (config('app.available_locales') as $locale)
                <!-- Name -->
                <div class="form-group">
                    <label for="name_{{ $locale }}">{{ __('Название') }} ({{ $locale }})</label>
                    <input id="name_{{ $locale }}" type="text" class="form-control @error('name_' . $locale) is-invalid @enderror" name="name_{{ $locale }}" value="{{ old('name_' . $locale) }}" required autocomplete="name_{{ $locale }}" autofocus>
                    @error('name_' . $locale)
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="description_{{ $locale }}">{{ __('Описание') }} ({{ $locale }})</label>
                    <textarea id="description_{{ $locale }}" class="form-control @error('description_' . $locale) is-invalid @enderror" name="description_{{ $locale }}">{{ old('description_' . $locale) }}</textarea>
                    @error('description_' . $locale)
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

                <!-- Keyword -->
                <div class="form-group">
                    <label for="keyword_{{ $locale }}">{{ __('Keyword') }} ({{ $locale }})</label>
                    <input id="keyword_{{ $locale }}" type="text" class="form-control @error('keyword_' . $locale) is-invalid @enderror" name="keyword_{{ $locale }}" value="{{ old('keyword_' . $locale) }}" required autocomplete="keyword_{{ $locale }}" autofocus>
                    @error('keyword_' . $locale)
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                @endforeach



                <!-- Status -->
                <div class="form-group">
                    <label for="status">{{ __('Статус') }}</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror" required>
                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>{{ __('Опубликовано') }}</option>
                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>{{ __('Черновик') }}</option>
                    </select>
                    @error('status')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

       

                <!-- Image Upload -->
                <div class="form-group">
                    <label for="image_path">{{ __('Изображение') }}</label>
                    <input id="image_path" type="file" class="form-control-file @error('image_path') is-invalid @enderror" name="image_path" accept="image/*">
                    @error('image_path')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Создать') }}
                    </button>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <!-- Select2 -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
                <script>
                    $("#single").select2({
                        placeholder: "Select a programming language",
                        allowClear: true
                    });
                    $("#tags").select2({
                        placeholder: "Select a programming language",
                        allowClear: true
                    });
                </script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        $('#tags').select2();
                    });
                </script>
            </form>
        </div>
    </div>
</div>
@endsection