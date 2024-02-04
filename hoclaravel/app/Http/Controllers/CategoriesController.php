<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    public function __construct(Request $request)
    {
        /*
        Nếu là trang danh sách chuyên mục => hiển thị ra dòng chữ: xin cháo unicode
        */ 
    //    if($request->is('categories')){
    //     echo '<h3>Xin chào unicode</h3>';
    //    }
    }
    //Hiển thị danh mục (Phương thức Get)
    public function index(Request $request){

        // if(isset($_GET['id'])){
        //     echo $_GET['id'];
        // }
        // $path = $request->path();
        // echo $path;
        //$url = $request->url();    
        // $fullUrl = $request->fullUrl();
        // echo $fullUrl;

        // $method = $request->method();
        // echo $method;


        $ip = $request->ip();


        // echo 'IP là: '.$ip;

        // if($request->isMethod('GET')){
        //     echo 'Phương thức Get';
        // }

        //     $server = $request->server();
        //    dd($_SERVER['REQUEST_URI']);

        // $header = $request->header('host');
        // dd($header);

        // $id = $request->input('id');
        // echo $id;

        //$id = $request->input('id.*.name');

        // $id = $request->id;
        // $name = $request->name;
        // dd($id);

        $name = request('name', 'Unicode');
        dd($name);
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
    public function addCategory(Request $request){

        $path = $request->path();
        echo $path;

        return view('clients/categories/add');
    }

    //Thêm dữ liệu vào chuyên mục(Phương thức Post)
    public function handleAddCategory(Request $request){
        // $allData = $request->all();
        // dd($allData);
        //return  redirect(route('categories.add'));
        //return 'Submit thêm chuyên mục';

        // if($request->isMethod('POST')){
        //     echo 'Phương thức POST';
        // }


    }
    //Xóa dữ liệu (Phương thức Delete)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục: '.$id;
    }
};
