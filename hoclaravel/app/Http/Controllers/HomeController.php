<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //Action index
    public function index(){
        
    $title = "Học lập trình web tại Unicode";
    $conntent = "Học lập trình Laravel 8.x tại Unicode";
    
    /*
    [
        'title' =>$title,
        'conntent' => $conntent
    ]
        compact('title', 'conntent')
    */




    return view('home' )->with(['title'=> $title, 'conntent' =>$conntent]);//load view hơe.php
   

   // return View::make('home')->with(['title'=> $title, 'conntent' =>$conntent]) ;

   //$conntentView = view('home')->render();
   //$conntentView = $conntentView->render();
   //dd($conntentView);
   //echo $conntentView;
}
    //Action getNews
    public function getNews(){
        return 'Danh sách tin tức';
    }
    public function getCategories($id){
        return 'Chuyên mục: '.$id;
    }
    public function getProductDetail($id){
        return view('clients.products.detail', compact('id'));
    }
}
