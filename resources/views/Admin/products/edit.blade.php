@extends('Admin.master')

@section('content')
    <h3>
        ویرایش محصول
    </h3>
    <hr>
    @include('errors')
    <form action="{{ route('products.update' , $product->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="title">عنوان</label>
            <input type="text" class="form-control" id="title" placeholder="عنوان را وارد کنید" name="title"
                   value="{{ $product->title }}">
        </div>
        <div class="form-group">
            <label for="tags">تگ ها</label>
            <input type="text" class="form-control" id="tags" placeholder="تگ ها را وارد کنید" name="tags"
                   value="{{ $product->tags }}">
        </div>
        <div class="form-group">
            <label for="images">ویرایش عکس</label>
            <input type="file" class="form-control" id="images" placeholder="عکس را را وارد کنید" name="images">
        </div>
            <div class="form-group">
            <img src="/{{ $product->images['images']['321'] }}">
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
                      placeholder="متن را را وارد کنید">{{ $product->body }}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="ویرایش محصول">
        </div>
    </form>
@endsection
