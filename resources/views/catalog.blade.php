@extends('layouts.main')

@section('content')
    <br />
    <div class="block_cards mt-20" style="display: flex; flex-wrap:wrap; justify-content: space-around;">
        @foreach ($posts as $post)
            <div class="card" style="width: 18rem;margin-top:20px;">
                <img src=" {{$post->image}}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <div>{{ $post->title }}</div><br />
                    </h5>
                    <p class="card-text">{{$post->content}}</p>
                    <div style="display: flex; flex-wrap:wrap; justify-content: space-between;">
                        <div>
                            <a href="{{ route('main.show', $post->id) }}" class="btn btn-primary">Открыть карточку</a>
                        </div>

                        {{-- <form action="{{ route('catalog.liked',$post->id )}}" method="POST">
                            @csrf
                            <button type="submit" class="fw-light nav-link fs-6">
                                <i class="bi bi-heart{{ ($post->id)? '-fill' : ''}}"></i>
                            </button>
                        </form> --}}

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
