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
@include('clients.contents.side');
@include('clients.contents.about');

@endsection

@section('css')

@endsection

@section('js')
  
  
@endsection 