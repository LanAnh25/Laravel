<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function __construct()
    {
        //echo 'Product khởi động';
        //Sử dụng session để check login
    }
    public function index(){
        return 'Danh sách sản phẩm';
    }

    //Hiển thị form thêm sản phẩm (Phương thức Get )
    public function create(){

    }

    //Xử lý sản phẩm (Phương thức Post)
    public function store(Request $request){

    }

    //Lấy ra thông tin của một sản phẩm (Phương thức Get)
    public function  show($id){

    }

    //Hiển thị form sửa sản phẩm (Phương thức Get)
    public function edit($id){

    }

    //Xử lý sửa sản phẩm
    public function update(Request $request){

    }
    //Xử lý xóa sản phẩm
    public function destroy($id){

    }

}
