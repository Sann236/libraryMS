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
        if($author && $category) {
            $data = Book::when($author, function($query) {

                $author = request()->author;
                $category = request()->category;
               
                $query->orWhere("author_id", "=", "$author")
                ->where("category_id", "=", "$category");
               
                })->when($category, function($query) {

                   $author = request()->author;
                   $category = request()->category;
                  
                   $query->orWhere("category_id", "=", "$category")
                       ->where("author_id", "=", "$author");
                  
                   })->paginate(10);
        }else {
            $data = Book::when($author, function($query) {

                $author = request()->author;
                
               
                $query->orWhere("author_id", "=", "$author");
                
               
                })->when($category, function($query) {

                   
                   $category = request()->category;
                  
                   $query->orWhere("category_id", "=", "$category");
                       
                  
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