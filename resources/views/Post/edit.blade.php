@extends('layouts.main')
@section('content')

<form action="{{ route('main.update',$post->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="title" class="form-label">Заголовок</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">

    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Описание</label>
      <textarea name="content" class="form-control" id="content" placeholder="Content">{{ $post->content }}</textarea>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Категория</label>
        <select name="category_id" class="form-select" id="category"
            placeholder="Category">
            {{-- <option selected>Выберите категорию</option> --}}
            @foreach ($categories as $category)
                {
                <option {{ $category->id === $post->category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                }
            @endforeach

        </select>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Изображение</label>
        <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{ $post->image }}">
      </div>
    <button type="submit" class="btn btn-primary">Обновить карточку</button>
  </form>
@endsection
