@extends('layouts.main')

@section('content')
    <div class="card" style="width: 67rem;">
        <img src="{{ $post->image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <div>{{ $post->title }}</div>
            </h5>
            <p class="card-text">{{ $post->content }}</p>
            <div class="row">
                <div class="col-3"><a href="#" class="btn btn-primary">В карзину</a></div>
                <br />
                <div class="col-3"><a href="{{ route('main.edit', $post->id) }}" class="btn btn-primary">Изменить карточку</a></div>
                <br />
                <form class="col-3" action="{{ route('main.delete', $post->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Удалть карточку</button>
                </form>
                <br />
                <div class="col-3"><a href="{{ route('main.index') }}"class="btn btn-primary">Назад</a></div>
            </div>
        </div>
    </div>
@endsection
