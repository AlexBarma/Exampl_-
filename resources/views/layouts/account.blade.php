@extends('layouts.main')

@section('content')
    <div class="row">

        <div class="col-4" style="width: 23.333333%;
        height: 0%;background-color: white;
    border-radius: 10px;margin-top: 53px;
    margin-left: 60px;">
            <ul class="nav flex-column" style="margin: 38px 0px 38px 0px;">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('account.accountPost') }}">Мои рецепты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.likedPost') }}">Избранные рецепты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Почта<span class="badge text-bg-secondary"
                        style="margin-left: 5px;">4</span></a></a>
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
    </div>
@endsection
