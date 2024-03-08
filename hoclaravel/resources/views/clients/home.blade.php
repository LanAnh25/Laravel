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



<p><img src="https://tse4.mm.bing.net/th?id=OIP.J0qdQFihroLgzhGT9VizIgHaLH&pid=Api&P=0&h=180" alt=""></p>
<p><a href="{{route('download-image').'?image='.public_path('storage/THM_zing.jpg)'}}" class="btn btn-primary">Download ảnh</a></p>
<p><a href="{{route('download-doc').'?file='.public_path('storage/demo-pdf.pdf')}}" class="btn btn-primary">Download doc</a></p>

@endsection

@section('css')
<style>
  img{
    max-width: 100%;
    height: auto;
  }
</style>
@endsection

@section('js')  
  
   
@endsection 