@extends('admin.layouts.main')
@section('content')
    <form action="{{ route('user.postEdit', ['id' =>$detail->id] ) }}" method="post" enctype="multipart/form-data">
        {{-- file bat buoc phai co  enctype="multipart/form-data" --}}
        @csrf
        {{-- form la phai co @csrf --}}
        <div class="form-group">
            <label for="">{{$detail->name}}</label>
        </div>
        <div class="form-group">
            <label for="">Email</label>
        <label for="">{{$detail->email}}</label>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" disabled class="form-control" name="password">
            <a href="{{ route('password.getChange') }}" class="btn btn-primary">Đổi Password</a>
        </div>
    </form>
@endsection
