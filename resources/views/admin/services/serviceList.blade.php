@extends('admin.layouts.main')
@section('content')
{{-- @if (Auth::check()==true) --}}
<a href="{{ route('service.getAdd') }}" class="btn btn-primary">Them moi</a>

{{-- @else --}}

{{-- @endif --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">Số thứ tự</th>
        <th scope="col">Tên dịch vụ</th>
        <th scope="col">Icon</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $services as $service )
        <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$service->name}}</td>
            <td><img src="/upload/services/{{$service->icon}}" width="100px" alt=""></td>
            <td>
                {{-- @if (Auth::check()) --}}
                <a href="{{ route('service.getEdit', ['id'=>$service->id]) }}" role="button" class="btn btn-primary">Update</a>
                <a href="{{ route('service.getDelete', ['id'=>$service->id]) }}" role="button" class="btn btn-danger">Delete</a>
                {{-- @endif --}}
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
