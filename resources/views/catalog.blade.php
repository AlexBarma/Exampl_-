@extends('layouts.main')

@section('content')
    <div><a href="{{ route('catalog.index') }}">All posts</a></div>
    <div><a href="{{ route('catalog.index', 'category_id=1') }}">Find category 1</a></div>
    <div><a href="{{ route('catalog.index', 'category_id=2') }}">Find category 2</a></div>
    <div>
        <div class="block_cards mt-20" style="display: flex; flex-wrap:wrap; justify-content: space-around;">

            @foreach ($postFilters as $postfilter)
                <div class="card" style="width: 18rem;margin-top:20px;">
                    <img style="height: 190px;" src=" {{ $postfilter->image }}" class="card-img-top" alt="...">
                    <br>
                    @foreach ($categories as $category)
                        @if ($postfilter->category_id == $category->id)
                            <div class="card-body">
                                <h5 class="card-title">Категория: {{ $category->title }}</h5>
                            </div>
                        @endif
                    @endforeach
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">
                            <div>{{ $postfilter->title }}</div><br />
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
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1"></label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">2</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
        <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
    </div>
    <br />
@endsection
