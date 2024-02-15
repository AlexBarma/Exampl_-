@extends('layouts.admin')

@section('content')
    <div class="card mb-3" style="max-width: 1140px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img style="height: 188px;" src="{{ $post->image }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        @foreach ($categories as $category)
                            @if ($post->category_id == $category->id)
                                <div>Категория: {{ $category->title }}</div>
                            @endif
                        @endforeach
                        <br>
                        <div>{{ $post->title }}</div>
                    </h5>
                    <p class="card-text">{{ $post->content }}</p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-4 mb-2"><a href="#" class="btn btn-primary">В корзину</a></div>
            <br />
            <div class="col-4 mb-2"><a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary">Изменить
                    рецепт</a></div>
            <br />
            <form class="col-4 mb-2" action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Удалить рецепт</button>
            </form>
            <br />
            <form class="col-4 mb-2" action="{{ route('main.addLiked', $post->id) }}" method="POST">
                @csrf
                @auth
                    <button type="submit" class="btn btn-primary">
                        Добавить в избранное
                    </button>
                @endauth
                @guest
                    <button class="btn btn-primary">
                        <a class="dropdown-item" href="#">Чтобы добавить себе нужно авторизоваться</a>
                    </button>
                @endguest
            </form>
            <br />
            <div class="col-4 mb-2"><a href="{{ route('admin.post.index') }}"class="btn btn-primary">Назад</a></div>
            <br>
        </div>
    </div>
@endsection
