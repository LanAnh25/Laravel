@extends('layout.client')

@section('title')
  {{$title}}
@endsection

@section('container')
@if(session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif

@if($error->any())
    <div class="alert alert-danger" >Dữ liệu nhập vào không hợp lệ. Vui lòng kiểm tra lại</div>

  <h1>{{$title}}</h1>
  <form action="" method="POST">
    <div class="mb-3">
        <label for="">Họ và tên</label>
        <input type="text" name="fullname" class="form-control" placeholder="Họ và tên..." value="{{old('fullname')}}">
        @error('fullname')
            <span style="color:red;">{{$message}}</span>
        @enderror
    </div>


    <div class="mb-3">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email..." value="{{old('email')}}>
        @error('email')
        <span style="color:red;">{{$message}}</span>
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>
    <a href="{{route('users.index')}}" class="btn btn-warning">Quay lại</a>
    @csrf
  </form>

  
  @endsection