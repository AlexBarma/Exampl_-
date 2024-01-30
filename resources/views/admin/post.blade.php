@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">Список постов</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Заголовок</th>
                            <th>Категория</th>
                            <th>Изображение</th>
                            <th>Описание</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td><a href="#">{{ $post->id }}</a></td>
                                <td><a href="#">{{ $post->title }}</a></td>
                                @foreach ($categories as $category)
                                    @if ($post->category_id == $category->id)
                                        <td><span class="badge badge-success">{{ $category->title }}</span></td>
                                    @endif
                                @endforeach
                                <td>
                                    <div class="sparkbar" data-color="#00a65a">
                                        <img style="height: 50px;" src="{{ $post->image }}" alt="img_post">
                                    </div>
                                </td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">{{ $post->content }}</div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    @endsection
