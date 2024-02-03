@extends('layouts.main')

@section('content')
    <div><a href="{{ route('catalog.index') }}"> Показать все рецепты </a></div>
    <div><a href="{{ route('catalog.index', 'category_id=1') }}"> Найди  Сладкие рецепты </a></div>
    <div><a href="{{ route('catalog.index', 'category_id=2') }}"> Найди Кислые рецепты </a></div>
    <br>

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
                            <!--Поставить возможность лайкнуть пост------------------------------------------------------->
                            <form action="#" method="POST">
                                @csrf
                                <button type="submit" class="fw-light nav-link fs-6">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
