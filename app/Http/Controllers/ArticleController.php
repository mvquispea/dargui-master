<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use Validator;
use Storage;

class ArticleController extends Controller
{
    // lista del total de articulos
    public function index()
    {
        $articles = Article::withCategory();

        return view('admin/article/index', [
            'articles' => $articles
        ]);
    }

    public function indexPublic($category)
    {
        $categoryFinded = Category::whereSlug($category)->first();
        if($categoryFinded == null) return abort(404);
        return view('articulos', [
                                'category' => $categoryFinded,
                                'menuActive' => $categoryFinded->slug,
                                ]);
    }

    public function showPublic($category, $article)
    {
        if( !is_numeric($article)  ) return abort(404);
        $category = Category::whereSlug($category)->first();
        if(is_null($category)) return abort(404);

        $articleFinded = Article::find($article);
        if(is_null($articleFinded)) return abort(404);

        return view('medicina/articulo', [
            'category' => $category,
            'article' => $articleFinded,
            'menuActive' => $category->slug,
        ]);
    }

    // Se crea un Articulo
    public function create(){
        $categories = Category::where('id','<', 5)->get();
        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"articulos",'name'=>"Artículos"], 
            ['name'=>"Crear artículo"]
        ];
        return view('/admin/article/create', [
                                                'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                                'categories' => $categories
                                            ]);
    }

    // Se edita un articulo
    public function edit($article)
    {
        if( !is_numeric($article) ) return abort(404);
        $categories = Category::where('id','<', 5)->get();
        $articleFinded = Article::find($article);
        if( is_null($articleFinded) ) return abort(404);

        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"articulos",'name'=>"Artículos"], 
            ['name'=>"Editar artículo"]
        ];
        return view('/admin/article/edit', [    'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                                'categories' => $categories,
                                                'article' => $articleFinded
                                                ]);
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $category = $request->category;
        $text = $request->text;
        $autor = $request->autor;
        $bajada = $request->bajada;
        $cita = $request->cita;
        $image =  $request->file('file');

        $article = new Article();
        $article->title = $title;
        $article->category_id = $category;
        $article->autor_id = 1;
        $article->text = $text;
        $article->autor = $autor;
        $article->bajada = $bajada;
        $article->cita = $cita;

        if($image){
            $filename = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
           /*
            $pathName = Storage::putFileAs('public/articles/images/',$request->file,$filename);
            $size = Storage::size($pathName);
            if($size) $article->image = Storage::url('public/articles/images/'.$filename);
        */
        $destinationPath = base_path('\public\img');
        $image->move($destinationPath,$filename);
        $article->image=$filename;


        }

        $article->save();

        return json_encode(['success'=>true, 'image' => $article->image]);
    }

    public function update(Request $request, $article)
    {
        if( !is_numeric($article) ) return json_encode(['success'=>false, 'error' => 'Id no válido.']);

        $article = Article::find($article);

        $title = $request->title;
        $category = $request->category;
        $text = $request->text;
        $autor = $request->autor;
        $bajada = $request->bajada;
        $cita = $request->cita;
        $image =  $request->file('file');

        // $article = new Article();
        $article->title = $title;
        $article->category_id = $category;
        $article->text = $text;
        $article->autor = $autor;
        $article->bajada = $bajada;
        $article->cita = $cita;

        if($image){
            $filename = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathName = Storage::putFileAs('public/articles/images/',$request->file,$filename);
            $size = Storage::size($pathName);
            if($size) $article->image = Storage::url('public/articles/images/'.$filename);
        }

        $article->save();

        return json_encode(['success'=>true]);
    }

    public function storeImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required'
        ]);
        if( $validator->fails() ) return json_encode(['success'=>false, 'error' => $validator->errors()]);
        $file = $request->file('file');

        $filename = sha1($file->getClientOriginalName().date('i:s')). '.'.$file->getClientOriginalExtension();
        $pathName = Storage::putFileAs('public/posts/images/',$request->file,$filename);
        $size = Storage::size($pathName);

        if($size) {
            return json_encode([
                                'success' => true,
                                'url' => Storage::url('public/posts/images/'.$filename)
                                ]);
        }  else {
            return json_encode([
                                'success'=> false,
                                'error'=>'Ocurrió un error al recibir el archivo.'
                                ]);
        }

    }

    public function destroy($article)
    {
        if( !is_numeric($article) ) return json_encode(['success'=>false, 'error' => 'Id no válido.']);

        $articleFinded = Article::find($article);

        $articleFinded->delete();

        return json_encode([ 'success' => true ]);
    }
}
