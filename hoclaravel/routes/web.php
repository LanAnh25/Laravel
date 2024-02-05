<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function(){
//     $html = '<h1>Học lập trình tại Unicode</h1>';
//     return  $html;
// });

// Route::get('unicode', function(){
//     return 'Phương thức Get của path/unicode';
//  });
// Route::get('unicode', function(){
//   return  view('form');
//    // return 'Phương thức Get của path/unicode';
// });

// Route::post('/unicode', function(){
//     return 'Phương thức Post của path /unicode';
// });
// Route::put('unicode', function(){
//     return 'Phương thức Put của path /unicode';
// });

// Route::delete('unicode', function(){
//     return 'Phương thức delete của path /unicode';
// });

// Route::patch('unicode', function(){
//     return 'Phương thức Patch của path /unicode';
// });

// Route::match(['get', 'post'], 'unicode', function(){
//     return $_SERVER['REQUEST_METHOD'];
// });
// Route::any('unicode', function(Request $request){
//     // $request = new Request();
//     return $request->method();
// });
// Route::get('show-form', function(){
//     return view('form');
// });

// Route::redirect('unicode', 'show-form', 404);

// Route::view('show-form', 'form');


// Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
// Route::get('/tin-tuc', 'HomeController@getNews')->name('news');
// Route::get('/chuyen-muc/{id}', [HomeController::class, 'getCategories']);
    


// Route::prefix('admin')->group(function (){
//     Route::get('tin-tuc/{id?}/{slug?}.html', function($id=null, $slug=null  ){
//         $conntent = 'Phương thức Get của path / unicode với tham số: ';
//         $conntent.='id = '.$id.'<br/>';
//         $conntent.='slug = '.$slug;
//         return $conntent;
//      })->where('id', '\d+')->where('slug', '.+')->name('admin.tintuc');

//     Route::get('show-form', function(){
//         return view('form');
//     })->name('admin.show-form');

//     Route::prefix('products')->middleware('CheckPermission')->group(function (){
//         Route::get('/', function(){
//             return'Danh sách sản phẩm';
//         });
//         Route::get('add', function(){
//             return 'Thêm sản phẩm';
//         })->name('admin.products.add');
//         Route::get('edit', function(){
//             return 'Sửa sản phẩm';
//         });
//         Route::get('delete', function(){
//             return 'Xóa sản phẩm';
//         });

//     });
// });


//Client route

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth.admin');

Route::middleware('auth.admin')->prefix('categories')->group(function (){
    //danh sách chuyên mục
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');
    //Lấy chi tiết một chuyên mục (Áp dụng show form sửa chuyên mục)
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

    //Xử lý update thư mục
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

    //Hiển thị form add dữ liệu
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');
    
    //Xử lý tên chuyên mục
    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

    //Xóa chuyên mục
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');

    //Hiển thị file upload
    Route::get('/upload', [CategoriesController::class, 'getFile']);

    //Xử lý file
    Route::post('/upload', [CategoriesController::class, 'handleFile'])->name('categories.upload');
    
    // Route::post('/upload', function (Request $request) {
    //     // Kiểm tra xem người dùng có upload file nên không
    //     if (!$request->hasFile('image')) {
    //         // Nếu không thì in ra thông báo
    //         return "Mời chọn file cần upload";
    //     }
    //     // Nếu có thì thục hiện lưu trữ file vào public/images
    //     $image = $request->file('image');
    //     //$storedPath = $image->move('images', $image->getClientOriginalName());
    
    //     return "Lưu trữ thành công";
    // })->name('categories.upload');
});

// Route::get('san-pham/{id}', [HomeController::class, 'getProductDetail']);
//Admin Route
Route::middleware('auth.admin')->prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('products', ProductController::class)->middleware('auth.admin.product');
   
});