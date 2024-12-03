@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Продукты') }}
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">{{ __('Создать продукт') }}</a>

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ __('Имя') }}</th>
                                <th>{{ __('Категория') }}</th>
                                <th>{{ __('Изображение') }}</th>
                                <th>{{ __('Статус') }}</th>
                                <th>{{ __('Действия') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name_uz }}</td>
                                <td>{{ $product->category->name_ru }}</td>

                                <td style="width:30%;">
                                    @foreach(json_decode($product->images) as $image)
                                    <img src="{{ asset($image) }}" alt="{{ $product->name_ru }}" class="img-fluid" width="50" style="margin: 3px;">
                                    @endforeach
                                </td>
                                <td style="color: white; ">
                                    <p class="btn btn-sm btn-primary " style="border:none; padding: 5px 10px ; opacity:0.9; background-color: {{ $product->status == 'published' ? 'green' : 'blue' }};"> {{ $product->status == 'published' ? __('Опубликовано') : __('Черновик') }}</p>
                                </td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">{{ __('Редактировать') }}</a>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary">Показывать</a>
                                    <form method="POST" action="{{ route('products.destroy', $product->id) }}" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">{{ __('Удалить') }}</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection