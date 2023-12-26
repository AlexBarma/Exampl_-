<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eample_1</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])<!--Подключение бутстрапа к странице-->
</head>

<body class="antialiased container ">
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid ">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="width: 3rem;" href="{{ route('main.index') }}"><img src="{{ asset('images\logos\logo.png') }}" class="card-img-top" alt="logo"></a>
                </li>

            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            href="{{ route('main.index') }}">Меню</a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="{{ route('main.create') }}">Создать карточку товара</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('main.index') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('content.index') }}">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('catalog.index') }}">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Контакты</a>
                    </li>

                </ul>
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Выйти из учетной записи
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <form action="{{ route('user.likedPost',$post->id )}}" method="POST">
                                    @csrf
                                    <button  type="submit" class="dropdown-item">
                                        Понравившиеся посты
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Поиск</button>
                </form>

            </div>
        </div>
    </nav>
    <div class="container text-bg-dark bg-gradient p-3">
        @yield('content')
        <!--Путь к страницам для этого шаблона-->
    </div>
    <div class="container bg-body-tertiary bg-gradient p-3 row">
        <div class="col-3">
            <div class="card" style="width: 7rem;">
                <a href="#"><img src="{{ asset('images\logos\logo.png') }}" class="card-img-top" alt="logo"></a>
            </div>
        </div>
        <div class="col-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Docs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Examples</a>
                </li>
            </ul>
        </div>
        <div class="col-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Guides</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Getting started</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Starter template</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Webpack</a>
                </li>
            </ul>
        </div>
        <div class="col-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Icons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">RFS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Examples repo</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
