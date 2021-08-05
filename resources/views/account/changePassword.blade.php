@extends('admin.layouts.main')
@section('content')
<form action="{{ route('user.postChange', ['id' =>$detail->id]) }}" method="post" enctype="multipart/form-data">
    {{-- file bat buoc phai co  enctype="multipart/form-data" --}}
    @csrf
    {{-- form la phai co @csrf --}}
    <div class="form-group">
        <label for="">Password New</label>
        <input type="password"class="form-control" name="icon">
      </div>
    <button type="submit" class="btn btn-success">Sửa</button>
</form>
@endsection
