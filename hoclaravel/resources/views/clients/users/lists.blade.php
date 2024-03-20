@extends('layout.client')

@section('title')
  {{$title}}
@endsection

@section('container')
@if(session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif
  <h1>{{$title}}</h1>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th with="5%">STT</th>
            <th>Tên</th>
            <th>Email</th>
            <th with="15%">Thời gian</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($users))
            @foreach($users as $key =>$item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->fullname}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->create_at}}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan = "4">Không có người dùng</td>
        </tr>
    </tbody>
  </table>