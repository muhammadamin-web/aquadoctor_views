@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ __('Создать тег') }}</h2>
            <form method="POST" action="{{ route('tags.store') }}">
                @csrf

                @foreach (config('app.available_locales') as $locale)
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name_{{ $locale }}">{{ __('Название') }} ({{ $locale }})</label>
                        <input type="text" class="form-control @error('name_' . $locale) is-invalid @enderror" 
                               name="name_{{ $locale }}" value="{{ old('name_' . $locale) }}" required>
                        @error('name_' . $locale)
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    @endforeach


                <!-- Submit and Cancel Buttons -->
                <div class="form-group  mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Создать') }}
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
