@extends('layout.client')

@section('title')
  {{$title}}
@endsection

@section('sidebar')
  @parent
  <h3>Home Sidebar</h3>
@endsection

@section('container')
<h1>Trang chủ</h1>
@datatime("2024-02-22 22:22:02")
@include('clients.contents.side')
@include('clients.contents.about')
@datatime("2024-02-24 10:22:02")
@endsection

@section('css')

@endsection

@section('js')  
  
   
@endsection 