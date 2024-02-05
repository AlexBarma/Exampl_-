@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-4">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('account.accountPost') }}">Мои рецепты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.likedPost') }}">Избранные рецепты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Почта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Корзина</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Мой аккаунт</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Выйти из учетной записи
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
            </ul>
            <!---------------------------------------------------->
        </div>
        @yield('account')
        {{-- <div class="col-8">
            <div id="list-example" class="list-group ">
                @foreach ($posts as $post)
                    <a class="list-group-item list-group-item-action"
                        href="{{ route('main.show', $post->id) }}">{{ $post->id }}.
                        {{ $post->title }}</a>
                @endforeach
                <div class="mt-4">
                    {{ $posts->links() }}<!--Подключение ссылок для работы пагинатации-->
                </div>
            </div>
        </div> --}}
    </div>
@endsection
