@extends('Admin.master')

@section('content')
    <h3>
        ثبت مقاله
    </h3>
    <hr>
    @include('errors')
    <form action="{{ route('categories.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">نام</label>
            <input type="text" class="form-control" id="name" placeholder="نام را وارد کنید" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="ثبت دسته">
        </div>
    </form>

@endsection