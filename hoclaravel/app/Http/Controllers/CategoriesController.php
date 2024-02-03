<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
    public function __construct()
    {
       
    }
    //Hiển thị danh mục (Phương thức Get)
    public function index(){
        return 'Danh sách chuyên mục';

    }
    //Lấy ra một chuyên mục theo id (Phương thức Get)
    public function getCategories($id){
        return 'Chi tiết chuyên mục: '.$id;
    }
    //Sửa danh mục (Phương thức Post)
    public function updateCategories($id){
        
    }
    //Show form thêm dữ liệu (Phương thức Get)
    public function addCategories(){
        return 'Form chuyên mục: ';
    }


    //Thêm dữ liệu vào chuyên mục(Phương thức Post)
    public function handleCategories(){

    }
    //Xóa dữ liệu (Phương thức Delete)
    public function remoteCategories($id){

    }
};
