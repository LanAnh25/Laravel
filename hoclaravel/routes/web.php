<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\CategoriesController as CategoriesController;
use App\Http\Controllers\HomeController as HomeController;


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


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/tin-tuc', 'HomeController@getNews')->name('news');
Route::get('/chuyen-muc/{id}', [HomeController::class, 'getCategories']);
    


Route::prefix('admin')->group(function (){
    Route::get('tin-tuc/{id?}/{slug?}.html', function($id=null, $slug=null  ){
        $conntent = 'Phương thức Get của path / unicode với tham số: ';
        $conntent.='id = '.$id.'<br/>';
        $conntent.='slug = '.$slug;
        return $conntent;
     })->where('id', '\d+')->where('slug', '.+')->name('admin.tintuc');

    Route::get('show-form', function(){
        return view('form');
    })->name('admin.show-form');

    Route::prefix('products')->middleware('CheckPermission')->group(function (){
        Route::get('/', function(){
            return'Danh sách sản phẩm';
        });
        Route::get('add', function(){
            return 'Thêm sản phẩm';
        })->name('admin.products.add');
        Route::get('edit', function(){
            return 'Sửa sản phẩm';
        });
        Route::get('delete', function(){
            return 'Xóa sản phẩm';
        });

    });
});



