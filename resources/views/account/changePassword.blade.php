@extends('admin.layouts.main')
@section('content')
<form action="{{ route('password.postChange') }}" method="post" enctype="multipart/form-data">
    {{-- file bat buoc phai co  enctype="multipart/form-data" --}}
    @csrf
    {{-- form la phai co @csrf --}}
    <div class="form-group">
        <label for="">Password New</label>
        <input type="password"class="form-control" name="password">
      </div>
    {{-- <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password"class="form-control" name="password_confirm">
      </div> --}}

    <button type="submit" class="btn btn-success">Sửa</button>
</form>
@endsection
