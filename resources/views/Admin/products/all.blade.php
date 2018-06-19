@extends('Admin.master')

@section('content')


    <div class="form-group">
        <h2 align="center">محصولات</h2>
    </div>
    <hr>
    <div class="left">
        <a href="{{ route('products.create') }}" class="btn btn-primary">اضافه کردن محصول</a>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>عنوان</th>
                <th>متن</th>
                <th>کاربر</th>
                <th>تنظیمات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td><a href="">{{ $product->title }}</a></td>
                    <td>{{ $product->body }}</td>
                    <td>{{ $product->user->name }}</td>
                    <td>
                        <div class="btn btn-group">
                            <form action="{{ route('products.destroy' , $product->slug) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <input type="submit" class="btn btn-danger" value="حذف">
                            </form>
                            <a href="{{ route('products.edit' , $product->slug) }}" class="btn btn-warning">ویرایش</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="align-items-center">
            {{ $products->render() }}
        </div>
    </div>

@endsection