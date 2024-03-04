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

@include('clients.contents.side')
@include('clients.contents.about')

@env('production')
<p>Môi trường production</p>
@elseenv('test')
<p>Môi trường test</p>
@else
<p>Môi trường dev</p>
@endenv
@php 
@endphp

<x-alert type="info" :content="$message" data-icon="youtube"/>


{{-- <x-forms.button/> --}}

@endsection

@section('css')

@endsection

@section('js')  
  
   
@endsection 