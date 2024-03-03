<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];

    
    public function index(){
        $this->data['title'] = 'Đào tạo lập trình web';


        $this->data['message']= 'Đăng kí tài khoản thành công';


        return view('clients.home', $this->data);
 
    }

    public function products()  {
        $this->data['title'] = 'Sản phẩm';
       return view('clients.products', $this->data);

        
    }
    public function getAdd(){
        $this->data['title'] = 'Thêm Sản phẩm';
        return view('clients.add',  $this->data);
    }
    public function postAdd(Request $request) {
        dd($request);
    }
    public function putAdd(Request $request) {
        return 'phương thức PUT';
        dd($request);
    }
}
