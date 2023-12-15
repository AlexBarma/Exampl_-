@extends('layouts.main')
@section('content')
<div class="card text-center">
    <div class="card-header">
      НАШИ КОНТАКТЫ
    </div>
    <div class="card-body ">
      <h5 class="card-title">196084, Санкт-Петербург, ул. Киевская д.5, лит. НБ</h5>
      <p class="card-text">
        8(812) 337-15-88, 8 (800) 250-51-15 (звонок бесплатный)
        info@cheese-cake.ru</p>
    </div>
  </div>
  <br>
  <div class="text-center">
    НАПИШИТЕ НАМ ЕСЛИ ПОЯВИЛИСЬ ВОПРОСЫ
  </div>
    <form action="{{ route('main.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Ваш электронный адрес</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="email">

        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Вопрос</label>
            <textarea name="content" class="form-control" id="content" placeholder="Задайте нам вопрос"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    {{-- <div class="card text-center">
    <div class="card-header">
      Контакты
    </div>
    <div class="card-body">
      <h5 class="card-title">196084, Санкт-Петербург, ул. Киевская д.5, лит. НБ</h5>
      <p class="card-text">
        8(812) 337-15-88, 8 (800) 250-51-15 (звонок бесплатный)
        info@cheese-cake.ru</p>
      <a href="#" class="btn btn-primary">Напишите нам</a>
    </div>
  </div> --}}
@endsection
