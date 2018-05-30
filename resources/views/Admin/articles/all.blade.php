@extends('Admin.master')

@section('content')


    <div class="form-group">
        <h2 align="center">مقالات</h2>
    </div>
    <hr>
    <div class="left">
        <a href="{{ route('articles.create') }}" class="btn btn-primary">اضافه کردن مقاله</a>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>عنوان</th>
                <th>نویسنده</th>
                <th>متن</th>
                <th>کاربر</th>
                <th>تنظیمات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td><a href="">{{ $article->title }}</a></td>
                    <td>{{ $article->writer }}</td>
                    <td>{{ $article->body }}</td>
                    <td>{{ $article->user->name }}</td>
                    <td>
                        <div class="btn btn-group">
                            <form action="{{ route('articles.destroy' , $article->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <input type="submit" class="btn btn-danger" value="حذف">
                            </form>
                            <a href="{{ route('articles.edit' , $article->id) }}" class="btn btn-warning">ویرایش</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="align-items-center">
            {{ $articles->render() }}
        </div>
    </div>

@endsection