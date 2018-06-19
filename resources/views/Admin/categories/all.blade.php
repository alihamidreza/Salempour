@extends('Admin.master')

@section('content')


    <div class="form-group">
        <h2 align="center">دسته بندی ها</h2>
    </div>
    <hr>
    <div class="left">
        <a href="{{ route('categories.create') }}" class="btn btn-primary">اضافه کردن دست بندی</a>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>نام</th>
                <th>تنظیمات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="btn btn-group">
                            <form action="{{ route('categories.destroy' , $category->name) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <input type="submit" class="btn btn-danger" value="حذف">
                            </form>
                            <a href="{{ route('categories.edit' , $category->name) }}" class="btn btn-warning">ویرایش</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="align-items-center">
            {{ $categories->render() }}
        </div>
    </div>

@endsection