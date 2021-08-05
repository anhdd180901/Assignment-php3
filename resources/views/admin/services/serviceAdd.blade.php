@extends('admin.layouts.main')
@section('content')
<form action="{{ route('service.postAdd') }}" method="post" enctype="multipart/form-data">
    {{-- file bat buoc phai co  enctype="multipart/form-data" --}}
    @csrf
    {{-- form la phai co @csrf --}}
    <div class="form-group">
        <label for="">name</label>
        <input type="text" class="form-control" name="name">
    </div>
    @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <div class="form-group">
        <label for="">icon</label>
        <input type="file" class="form-control" name="icon">
        @error('icon')
        <p class="alert alert-danger">{{$messages}}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Thêm</button>
</form>
@endsection
