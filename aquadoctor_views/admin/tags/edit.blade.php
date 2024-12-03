@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ __('Редактировать тег') }}</h2>
            <form method="POST" action="{{ route('tags.update', $tag->id) }}">
                @csrf
                @method('PUT')
                @foreach (config('app.available_locales') as $locale)

                <div class="form-group">
                    <label for="name_{{ $locale }}">{{ __('Название') }} ({{ $locale }})</label>
                    <input id="name_{{ $locale }}" type="text" class="form-control @error('name_' . $locale) is-invalid @enderror" name="name_{{ $locale }}" value="{{ old('name_' . $locale, $tag->{'name_' . $locale}) }}" required autocomplete="name_{{ $locale }}">
                    @error('name_' . $locale)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                @endforeach

                <!-- Submit and Cancel Buttons -->
                <div class="form-group  mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Сохранить изменения') }}
                    </button>
                    <a href="{{ route('tags.index') }}" class="btn btn-secondary">
                        {{ __('Отмена') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
