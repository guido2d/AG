<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return redirect('/admin/blog');
    }
    
    public function listBlog(){
        $novedades = Blog::orderBy('id', 'desc')->paginate(10);
        return view('admin.blog', compact('novedades'));
    }
    
    public function saveNews(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'visible' => 'required',
            'image' => 'required',
        ]);

        /* GUARDO LA IMAGEN */
        $file = $request->file('image');
        $path = public_path().'/img/blog/';
        $extension = $file->extension();
        $nuevo_nombre = date("d").date("m").date("y").date("i").date("s")."BG.".$extension;
        $file->move($path,$nuevo_nombre);
        
        /* GUARDO LA NOTICIA */
        $new = new Blog;
        $new->title = $request->get('title');
        $new->description = $request->get('description');
        $new->short_description = $request->get('short_description');
        $new->visible = $request->get('visible');
        $new->image = $nuevo_nombre;
        $new->save();
        
        return redirect('/admin/blog')->with('correcto', 'La noticia se ha guardado correctamente.');
    }
    
    public function deleteNews($id){
        
        $prod = Blog::where('id', $id)->delete();
        
        return redirect('/admin/blog')->with('correcto', 'La noticia se ha eliminado correctamente.');
        
    }
    
    public function editNews($id){
        $noticia = Blog::find($id);
        return view('admin.editar-noticia', compact('noticia', 'ingles'));
    }
    
    public function updateNews(Request $request){
        
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'visible' => 'required',
        ]);
        
        /* GUARDO LA IMAGEN */
        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $path = public_path().'/assets/images/blog/';
            $extension = $file->extension();
            $nombre = date("d").date("m").date("y").date("i").date("s")."BG.".$extension;
            $file->move($path,$nombre);
        }else{
            $nombre = $request->get('file_name');
        }
        
        /*Guardo la noticia*/
        $new = Blog::find($request->get('noticia_id'));
        $new->title = $request->get('title');
        $new->description = $request->get('description');
        $new->short_description = $request->get('short_description');
        $new->visible = $request->get('visible');
        $new->image = $nombre;
        $new->save();
        
        return redirect('/admin/blog')->with('correcto', 'La noticia se ha actualizado correctamente.');
    }
}
