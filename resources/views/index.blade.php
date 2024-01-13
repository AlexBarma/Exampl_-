@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-4">
            <div id="list-example" class="list-group ">
                @foreach ($posts as $post)
                    <a class="list-group-item list-group-item-action"
                        href="{{ route('main.show', $post->id) }}">{{ $post->id }}.
                        {{ $post->title }}</a>
                @endforeach
            </div>
            <div class="mt-4">
                {{ $posts->links() }}<!--Подключение ссылок для работы пагинатации-->
            </div>

            <!---------------------------------------------------->
        </div>
        <div class="col-8">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="height: 445px;" src="https://svet-vostoka.ru/wp-content/uploads/2023/05/%D0%BA%D0%B8%D1%82%D0%B0%D0%B9%D1%81%D0%BA%D0%B8%D0%B5-%D0%BC%D0%BE%D1%82%D0%B8.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Вкуснейшие десерты</h5>
                            <p>Рецепты простых, но вкусных десертов.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img  style="height: 445px;" src="https://megobari.wine/wp-content/uploads/2018/07/O5A6169-2.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Вкуснейшие десерты</h5>
                            <p>Рецепты простых, но вкусных десертов.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img  style="height: 445px;" src="https://img51994.telefamily.ru/img/2011-02-28/fmt_114_24_franchd6.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Вкуснейшие десерты</h5>
                            <p>Рецепты простых, но вкусных десертов.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection
