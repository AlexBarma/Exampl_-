@extends('layouts.main')

@section('content')
    <br />
    <div class="block_cards mt-20" style="display: flex; flex-wrap:wrap; justify-content: space-around;">
        @foreach ($posts as $post)
            <div class="card" style="width: 18rem;margin-top:20px;">
                <img style="height: 190px;" src=" {{ $post->image }}" class="card-img-top" alt="...">
                <br>
                @foreach ($categories as $category)
                    @if ($post->category_id == $category->id)
                        <div class="card-body">
                            <h5 class="card-title">Категория: {{ $category->title }}</h5>
                        </div>
                    @endif
                @endforeach
                <br>
                <div class="card-body">
                    <h5 class="card-title">
                        <div>{{ $post->title }}</div><br />
                    </h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <div style="display: flex; flex-wrap:wrap; justify-content: space-between;">
                        <div>
                            <a href="{{ route('main.show', $post->id) }}" class="btn btn-primary">Открыть рецепт</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
