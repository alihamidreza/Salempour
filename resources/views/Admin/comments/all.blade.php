<style>
    /* Rating Star Widgets Style */
.rating-stars ul {
    list-style-type:none;
    padding:0;

    -moz-user-select:none;
    -webkit-user-select:none;
}
.rating-stars ul > li.star {
    display:inline-block;

}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
    font-size:2.5em; /* Change the size of the stars */
    color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
    color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
    color:#FF912C;
}

</style>
@extends('Admin.master')

@section('content')


    <div class="form-group">
        <h2 align="center">نظرات</h2>
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
                        <div class="btn btn-group">
                            <form action="{{ route('comments.destroy' , $comment->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <input type="submit" class="btn btn-danger" value="حذف">
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