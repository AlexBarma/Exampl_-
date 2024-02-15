@extends('layouts.account')

@section('account')
<div class="col-8">
    <div class="card-header border-transparent">
        <h3 class="card-title">Список избранных рецептов</h3>

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
        <div class="table-responsive "style="border-radius: 10px">
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

                                    <td><span class="badge badge text-bg-success">{{ $category->title  }}</span></td>
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
    <div class="mt-4">
        {{ $paginate->links() }}<!--Подключение ссылок для работы пагинатации-->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <a href="{{ route('admin.post.create') }}" class="btn btn-sm btn-info float-left">Создать новый пост</a>
        <a href="#" class="btn btn-sm btn-secondary float-right">Показать все посты</a>
    </div>
</div>
{{-- <div class="col-3">
    <div class="block_cards mt-20" style="display: flex; flex-wrap:wrap; justify-content: space-around;">
        @foreach ($posts as $post)
                <div class="card" style="width: 18rem;margin-top:20px;">
                    <img style="height: 190px;" src=" {{ $post->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <div>{{ $post->title }}</div><br />
                        </h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <div style="display: flex; flex-wrap:wrap; justify-content: space-between;">
                            <div>
                                <a href="{{ route('main.show', $post->id) }}" class="btn btn-primary">Открыть карточку</a>
                            </div>

                            <form action="{{ route('user.likedPost', $post->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="fw-light nav-link fs-6">
                                    <i class="bi bi-heart{{ $post->id ? '-fill' : '' }}"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
@endsection
