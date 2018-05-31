@extends('Admin.master')

@section('content')
    <h3>
        ثبت مقاله
    </h3>
    <hr>
    @include('errors')
    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">عنوان</label>
            <input type="text" class="form-control" id="title" placeholder="عنوان را وارد کنید" name="title"
                   value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="writer">نویسنده</label>
            <input type="text" class="form-control" id="writer" placeholder="نویسنده را وارد کنید" name="writer"
                   value="{{ old('writer') }}">
        </div>
        <div class="form-group">
            <label for="tags">تگ ها</label>
            <input type="text" class="form-control" id="tags" placeholder="تگ ها را وارد کنید" name="tags"
                   value="{{ old('tags') }}">
        </div>
        <div class="form-group">
            <label for="images">عکس</label>
            <input type="file" class="form-control" id="images" placeholder="عکس را را وارد کنید" name="images"
                   value="{{ old('images') }}">
        </div>

        <div class="form-group">
            <select class="form-control" name="category_id[]" multiple>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="body">متن</label>
            <textarea class="form-control" id="body" rows="6" name="body"
                      placeholder="متن را را وارد کنید">{{ old('body') }}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="ثبت مقاله">
        </div>
    </form>
@endsection
