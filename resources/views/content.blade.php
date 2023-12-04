@extends('layouts.main')

@section('content')
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseOne">
                   Акция два по цене одного, подроности внутри
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    Скидочная карта
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    Станьте нашим партнером Подробности по франшизе
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="content"><h2 class="text-center">ПОСЛЕДНИЕ НОВИНКИ</h2></div>
    <br />
    <div class="block_cards mt-20" style="display: flex; flex-wrap:wrap; justify-content: space-around;">
        <div class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/premium-photo/cupcake-with-pink-cream-on-a-pink-background-3d-rendering-generative-ai_627050-594.jpg"
                class="card-img-top" alt="...">
            @foreach ($posts as $post)
                @if ($post->id == 1)
                    <div class="card-body">
                        <h5 class="card-title">
                            <div>{{ $post->title }}</div>
                        </h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/premium-photo/a-close-up-colorful-cupcake-on-a-pastel-background-sweet-dessert-bakery-food-ai-generated_755721-15954.jpg?w=2000"
                class="card-img-top" alt="...">
                @foreach ($posts as $post)
                @if ($post->id == 2)
                    <div class="card-body">
                        <h5 class="card-title">
                            <div>{{ $post->title }}</div>
                        </h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/premium-photo/a-close-up-colorful-cupcake-on-a-pastel-background-sweet-dessert-bakery-food-ai-generated_755721-16175.jpg?w=740"
                class="card-img-top" alt="...">
                @foreach ($posts as $post)
                @if ($post->id == 3)
                    <div class="card-body">
                        <h5 class="card-title">
                            <div>{{ $post->title }}</div>
                        </h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
