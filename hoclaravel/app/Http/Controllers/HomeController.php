<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdcutRequest;
use Illuminate\Support\Facades\Validator;
use App\Rules\Uppercase;
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
    public function postAdd(Request $request) {
         $rules =[
            'product_name' =>['required', 'min:6', function($attribute, $value, $fall){
               isUppercase($value, 'Trường :attribute không hợp lệ', $fall);

            }],
            'product_price' =>['required','integer']
            
            // 'product_price' =>'required|integer'
        ];
             $messages = [
            'required' => 'Trường :attribute bắt buộc phải nhập',
            'min' => 'Trường :attribute không được nhỏ hơn :min ký tự',
            'integer' => 'Trường :attribute phải là số',
            //'uppercase' => 'Trường :attribute phải viết hoa'
             ];
        //  $messages = [
        //     'product_name.required' =>'Tên sản phẩm bắt buộc phải nhập',
        //     'product_name.min' =>'Tên sản phẩm không được nhỏ hơn :min kí tự',
        //     'product_price.required' =>'Giá sản phẩm bắt buộc phải nhập',
        //     'product_price.min' =>'Giá sản phẩm bắt buộc là số'
        // ];
        $attribute = [
            'product_name' => 'Tên sản phẩm',
            'product_price' => 'Giá sản phẩm'
        ];

       $validator = Validator::make($request->all(), $rules, $messages, $attribute);
    //    $$validator->validate();
       if($validator->fails()){
        $validator->errors()->add('msg', 'Vui lồng kiểm tra lại dữ liệu');
        // return 'Validate thất bại';
       }else {
        // return 'Validate thành công';
        return redirect('product')->with('msg', 'Validate thành công');
       }

       return back()->withErrors($validator );
       
   
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
// public function isUppercase($value, $messages, $fall){
//     if( $value!=\mb_strtoupper($value, 'UTF-8')){
//         $fall($messages);
//     }
// }
}