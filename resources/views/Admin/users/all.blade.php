@extends('Admin.master')

@section('content')


    <div class="form-group">
        <h2 align="center">کاربران</h2>
    </div>
    <hr>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>مقام</th>
                <th>تنظیمات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->level }}</td>
                    <td>
                        <div class="btn btn-group">
                            <form action="{{ route('users.update' , $user->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                @if($user->active == 1)
                                    <button type="submit" href="{{ route('users.update' , $user->id) }}" class="btn btn-danger" name="active_status" value="0">غیر فعال کردن</button>
                                @else
                                    <button type="submit" href="{{ route('users.update' , $user->id) }}" class="btn btn-success" name="active_status" value="1">فعال کردن</button>
                                @endif
                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="align-items-center">
            {{ $users->render() }}
        </div>
    </div>

@endsection