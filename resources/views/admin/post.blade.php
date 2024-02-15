@extends('layouts.admin')

@section('content')
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
                            <td><a href="{{ route('admin.post.show', $post->id) }}">{{ $post->id }}</a></td>
                            <td><a href="{{ route('admin.post.show', $post->id) }}">{{ $post->title }}</a></td>
                            @foreach ($categories as $category)
                                @if ($post->category_id == $category->id)
                                    <td><span class="badge badge text-bg-success">{{ $category->title }}</span></td>
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
                            <td>
                            <div class="col-4 mb-2"><a  href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary">Изменить</a></div>
                            </td>
                            <td>
                            <form class="col-4 mb-2" action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <div class="mt-4">
        {{ $posts->links() }}<!--Подключение ссылок для работы пагинатации-->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <a href="{{ route('admin.post.create') }}" class="btn btn-sm btn-info float-left">Создать новый пост</a>
        <a href="#" class="btn btn-sm btn-secondary float-right">Показать все посты</a>
    </div>
@endsection
