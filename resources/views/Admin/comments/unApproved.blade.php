@extends('Admin.master')

@section('content')


    <div class="form-group">
        <h2 align="center">نظرات تایید نشده</h2>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
            <thead>
            <tr>
                <th>نام</th>
                <th>متن</th>
                <th>امتیاز</th>
                <th>پست مربوطه</th>
                <th>تنظیمات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>{{ $comment->point }}</td>
                <td><a href="/{{ $comment->commentable->path() }}">{{ $comment->commentable->title }}</a></td>
                    <td>
                        <div class="btn btn-group btn-sm">
                            <form action="{{ route('comments.destroy' , $comment->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <input type="submit" class="btn btn-danger" value="حذف">
                            </form>
                        </div>
                        <div class="btn btn-group btn-sm">
                            <form action="{{ route('comments.update' , $comment->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("PATCH") }}
                                <input type="submit" class="btn btn-success" value="تایید">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="align-items-center">
            {{ $comments->render() }}
        </div>
    </div>

@endsection