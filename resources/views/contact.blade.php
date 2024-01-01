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
    <form action="{{ route('main.storeMessage') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Ваш электронный адрес</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="email">
        </div>
        <div class="mb-3">
            <label for="user_messages" class="form-label">Вопрос</label>
            <textarea name="messages" class="form-control" id="user_messages" placeholder="Задайте нам вопрос"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
