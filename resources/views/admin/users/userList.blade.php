@extends('admin.layouts.main')
@section('content')
@if (Auth::check()==true)
<a href="{{ route('user.getAdd') }}" class="btn btn-primary">Thêm</a>
@else

@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">Tên</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $users as $user )
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @if (Auth::check()==true)
                <a href="{{ route('user.getEdit', ['id'=>$user->id]) }}" role="button" class="btn btn-primary">Update</a>
                <a href="{{ route('user.getDelete', ['id'=>$user->id]) }}" role="button" class="btn btn-danger">Delete</a>
                @else

                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
