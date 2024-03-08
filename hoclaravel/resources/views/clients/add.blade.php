@extends('layout.client')

@section('title')
  {{$title}}
@endsection



@section('container')
<h1>Thêm sản phẩm</h1>
<form action="" method="POST">
  @if ($errors->any())
    <div class="alert alert-danger text-center">
      Vui lòng kiểm tra lại dữ liệu

    </div>
  @endif
   <div class="mb-3">
    <label for="">Tên sản phẩm</label> 
    <input type="text" class="form-control" name="product_name" placeholder="Tên sản phẩm..." value="{{old('product_name')}}" />
    @error('product_name')
      <span style="color: red;">{{$errorMessage}}</span>
    @enderror

   </div>
   
   <div class="mb-3">
    <label for="">Giá sản phẩm</label> 
    <input type="text" class="form-control" name="product_price" placeholder="Giá sản phẩm..." value="{{old('product_price')}} />

   </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
    @csrf
</form>

@endsection

@section('css')

@endsection

@section('js')  
  
   
@endsection 