@extends('admin.layouts.main')
@section('content')
    <form action="{{ route('user.postEdit', ['id' =>$detail->id] ) }}" method="post" enctype="multipart/form-data">
        {{-- file bat buoc phai co  enctype="multipart/form-data" --}}
        @csrf
        {{-- form la phai co @csrf --}}
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" class="form-control" name="name" value="{{$detail->name}}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value="{{$detail->email}}">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" value="{{$detail->password}}">
        </div>
        <button type="submit" class="btn btn-success">Them Moi</button>
    </form>
@endsection
