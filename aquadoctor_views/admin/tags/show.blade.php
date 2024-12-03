@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $tag->name }}</div>
                <div class="card-body">
                    <!-- Name -->
                    @foreach (config('app.available_locales', ['ru', 'uz', 'en']) as $locale)

                    <div class="form-group">
                <h5>{{ __('Название') }} ({{ $locale }})</h5>
                <p>{{ $tag->{'name_' . $locale} }}</p>
            </div>
            @endforeach


                    <a href="{{ route('tags.index') }}" class="btn btn-secondary">{{ __('Назад') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
