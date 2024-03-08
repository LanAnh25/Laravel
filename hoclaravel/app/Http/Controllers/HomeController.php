<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdcutRequest;

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
        $this->data['errorMessage'] = 'Vui lòng kiểm tra lại dữ liệu';
        return view('clients.add',  $this->data);
    }
    public function postAdd(ProdcutRequest $request) {
        dd($request);


        // $rules =[
        //     'product_name' =>'required|min:6',
        //     'product_price' =>'required|integer'
        // ];
        // $messages = [
        //     'product_name.required' =>'Trường :attribute bắt buộc phải nhập',
        //     'product_name.min' =>'Tên sản phẩm không được nhỏ hơn :min kí tự',
        //     'product_price.required' =>'Giá sản phẩm bắt buộc phải nhập',
        //     'product_price.min' =>'Giá sản phẩm bắt buộc là số'
        // ];

    //     $messages = [
    //         'required' => 'Trường :attribute bắt buộc phải nhập',
    //         'min' => 'Trường :attribute không được nhỏ hơn :min ký tự',
    //         'integer' => 'Trường :attribute phải là số'
    //     ];
    //    $request->validate($rules, $messages);

       //xử lý việc thêm dữ liệu vào database
    }
    public function putAdd(Request $request) {
        return 'phương thức PUT';
        dd($request);
    }
    public function getArr(){
        $contentArr = [
            'name' => 'Laravel 8.x',
            'lesson' => 'Khóa học lập trình Laravel',
            'academy' => 'Unicode Academy'
        ];
        return  $contentArr;
    }
    public function downloadImage(Request $request){
        if (!empty($request->image)){
            $image = trim($request->image);
             $fileName = 'image_'.uniqid().'.jpg';
            // $fileName = basename($image);
            // return response()->streamDownload(function() use($image){
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // }, $fileName);
         return response()->download($image, $fileName);
        }
    }
    public function downloadDoc(Request $request){
        if (!empty($request->file)){
            $file = trim($request->file);
             $fileName = 'tai-lieu'.uniqid().'.pdf';
             $headers = [
                'Content-Type' => 'application/pdf'
             ];
         return response()->download($file, $fileName);

    }
}
}