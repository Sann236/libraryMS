<?php
  
namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $author = request()->author;
        $category = request()->category;
        $available = request()->available;

        if($author && $category && $available) {
            $data = Book::when($author, function($query) {

                $author = request()->author;
                $category = request()->category;
                $available = request()->available;
               
                $query->orWhere("author_id", "=", "$author")
                ->where("category_id", "=", "$category")->where("status", "=", "$available");
               
                })->when($category, function($query) {

                   $author = request()->author;
                   $category = request()->category;
                   $available = request()->available;
                   $query->orWhere("category_id", "=", "$category")
                       ->where("author_id", "=", "$author")->where("status", "=", "$available");
                  
                   })->when($available, function($query) {

                    $author = request()->author;
                    $category = request()->category;
                    $available = request()->available;
                    $query->orWhere("status", "=", "$available")
                        ->where("author_id", "=", "$author")->where("category_id", "=", "$category");
                   
                    })->paginate(10);
        }else {
            $data = Book::when($author, function($query) {

                $author = request()->author;
                
               
                $query->where("author_id", "=", "$author");
                
               
                })->when($category, function($query) {

                   
                   $category = request()->category;
                  
                   $query->where("category_id", "=", "$category");
                       
                  
                   })->when($available, function($query) {

                   
                    $available = request()->available;
                   
                    $query->where("status", "=", "$available");
                        
                   
                    })->paginate(10);
        }
        
        return view('home',[
            'books' => $data,
            'categories' => Category::all(),
            'authors' => Author::all(),
        ]);
    } 

    
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        return view('adminHome');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome(): View
    {
        return view('managerHome');
    }
}