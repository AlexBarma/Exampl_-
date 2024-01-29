@extends('layouts.main')

@section('content')
    <div><a href="{{ route('catalog.index') }}"> Показать все рецепты </a></div>
    <div><a href="{{ route('catalog.index', 'category_id=1') }}"> Найди  Сладкие рецепты </a></div>
    <div><a href="{{ route('catalog.index', 'category_id=2') }}"> Найди Кислые рецепты </a></div>
    <br>

    {{-- @foreach ($categories as $category)
        <form action="{{ route('catalog.index',$category->id) }}" method="GET">
            @csrf
            <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $category->title }}" id="{{ $category->id }}" value="{{ $category->id }}">
                <label class="form-check-label" for="{{ $category->id }}" >
                    {{ $category->title }}
                </label>
            </div>
    @endforeach
        <button type="submit" class="btn btn-primary ">показать</button>
        </form> --}}


        <div class="block_cards mt-20" style="display: flex; flex-wrap:wrap; justify-content: space-around;">
            @foreach ($postFilters as $postfilter)
                <div class="card" style="width: 18rem;margin-top:20px;">
                    <img style="height: 190px;" src=" {{ $postfilter->image }}" class="card-img-top" alt="...">
                    @foreach ($categories as $category)
                        @if ($postfilter->category_id == $category->id)
                            <div class="card-body">
                                <h5 class="card-title">Категория: {{ $category->title }}</h5>
                            </div>
                        @endif
                    @endforeach
                    <div class="card-body">
                        <h5 class="card-title">
                            <div>{{ $postfilter->title }}</div>
                        </h5>
                        <p class="card-text">{{ $postfilter->content }}</p>
                        <div style="display: flex; flex-wrap:wrap; justify-content: space-between;">
                            <div>
                                <a href="{{ route('main.show', $postfilter->id) }}" class="btn btn-primary">Открыть
                                    рецепт</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
