@extends('layouts.main')

@section('content')
    <form action="{{ route('main.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">

        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Описание</label>
            <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Категория</label>
            <select name="category_id" class="form-control" id="category_id" placeholder="Category">
                {{-- <option selected>Выберите категорию</option> --}}
                @foreach ($categories as $category)
                    {
                    <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                        {{ $category->title }}
                    </option>
                    }
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image">
        </div>
        <button type="submit" class="btn btn-primary">Создать карточку</button>
    </form>
@endsection
