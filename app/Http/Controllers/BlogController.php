<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller{
    
    
    public function index(){
        
        $novedades = Blog::visible()->orderBy('created_at', 'desc')->paginate(9);
        
        return view('blog', compact('novedades'));
        
    }
    
    public function detail($slug){
        
        $noticia = Blog::where('slug', $slug)->firstOrFail();
        
        $relacionadas = Blog::inRandomOrder()->limit(4)->get();
        
        return view('blog-detail', compact('noticia', 'relacionadas'));
        
    }
}
