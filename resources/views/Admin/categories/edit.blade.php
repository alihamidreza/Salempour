@extends('Admin.master')

@section('content')
    <h3>
        ویرایش دسته بندی
    </h3>
    <hr>
    @include('errors')
    <form action="{{ route('categories.update' , $category->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">عنوان</label>
            <input type="text" class="form-control" id="name" placeholder="نام را وارد کنید" name="name"
                   value="{{ $category->name }}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="ویرایش دسته بندی">
        </div>
    </form>
@endsection
