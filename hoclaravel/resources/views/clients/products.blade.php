@extends('layout.client')

@section('title')
  {{$title}}
@endsection

{{-- @section('sidebar')
  @parent
  <h3>Product Sidebar</h3>
@endsection --}}

@section('container')
@if(session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif
  <h1>SẢN PHẨM</h1>
  <x-package-alert></x-package-alert>
  @push('scripts')
  <script>
    console.log('Push lần 2');
  </script>
  @endpush

@endsection

@section('css')
 
  
@endsection

@section('js')
 
@endsection
@prepend('scripts')
<script>
  console.log('Push lần 1');
</script>
@endprepend()
  
