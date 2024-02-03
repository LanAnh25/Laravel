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
        return view('clients/categories/list');

    }
    //Lấy ra một chuyên mục theo id (Phương thức Get)
    public function getCategory($id){
        return view('clients/categories/edit');
    }
    //Sửa danh mục (Phương thức Post)
    public function updateCategory($id){
        return 'Submit sửa chuyên mục:  '.$id;
    }
    //Show form thêm dữ liệu (Phương thức Get)
    public function addCategory(){
        return view('clients/categories/add');

    }

    //Thêm dữ liệu vào chuyên mục(Phương thức Post)
    public function handleAddCategory(){
     return  redirect(route('categories.add'));
        //return 'Submit thêm chuyên mục';

    }
    //Xóa dữ liệu (Phương thức Delete)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục: '.$id;

    }
};
