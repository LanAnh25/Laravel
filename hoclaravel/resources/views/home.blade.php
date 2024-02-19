<h1>Trang chủ Unicode</h1>
<h2> {{request()->keyword?request()->keyword:'Không có gì';}}</h2>
<div class="container">
    {!! !empty($content)?$content:false !!}
</div>
<hr>
{{-- @php 
$total = 0;
@endphp
@for ($index = 0; $index<10; $index++)
@php 
$total +=$index;
@endphp
<p>Phần tử: {{$index}}</p>
@endfor
<h3>Tổng: {{$total}}</h3> --}}
<hr>
<?php 
// for ($index = 0; $index<10; $index++){
//     echo '<p>Phần tử: '.$index.'</p>';
// }
?>

@php 
// for ($index = 0; $index<10; $index++){
//     echo '<p>Phần tử: '.$index.'</p>';
// }
@endphp

{{-- @verbatim
<div class="container">
    Hello, {{className}}
</div>
<script>
  Hello, {{name}}
  Hi, {{age}}
</script>
@endverbatim --}}
@php
//$message = 'Đặt hàng thành công';
@endphp
@include('parts.notice')