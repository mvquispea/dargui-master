<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use Validator, Auth, Storage;

class ScientificArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('category_id', 5)->orderBy('created_at','desc')->get();

        return view('admin/scientifics/index', [
            'articles' => $articles
        ]);
    }

    public function showPublic($article)
    {
        if( !is_numeric($article)  ) return abort(404);

        $articleFinded = Article::find($article);
        if(is_null($articleFinded)) return abort(404);

        return view('cientificos/articulo', [
            'article' => $articleFinded,
            'menuActive' => 'articulos-cientificos',
        ]);
    }

    public function create()
    {
        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"cientificos",'name'=>"Artículos científicos"], 
            ['name'=>"Crear artículo científico"]
        ];
        return view('/admin/scientifics/create', [
                                                'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                            ]);
    }

    public function edit($article)
    {
        if( !is_numeric($article) ) return abort(404);
        $articleFinded = Article::withAuthor($article);
        if( is_null($articleFinded) ) return abort(404);

        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"cientificos",'name'=>"Artículos científicos"], 
            ['name'=>"Editar artículo científico"]
        ];
        return view('/admin/scientifics/edit', [    'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                                'article' => $articleFinded
                                                ]);
    }

    public function destroy($article)
    {
        if( !is_numeric($article) ) return json_encode(['success'=>false, 'error' => 'Id no válido.']);

        $articleFinded = Article::find($article);

        $articleFinded->delete();

        return json_encode([ 'success' => true ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'articleFile' => 'required|file',
            'articleImage' => 'nullable',
            'visibility' => 'required|string|min:0|max:1',
        ]);

        //dd($request->all());
 
        if( $validator->fails() ) return redirect()->back()->with('error', 'Hubo un error en el envío de los datos. Por favor, complete los datos correctamente.');

        $articleFile =  $request->articleFile;
        $image =  $request->articleImage;

        if($image && $image->getSize() > 500000) return redirect()->back()->with('error', 'Por favor, adjunte una imagen con un peso menor a 500 KB.');

        $article = new Article();
        $article->title = $request->title;
        $article->category_id = 5;
        $article->autor_id = Auth::user()->id;
        $article->visibility = $request->visibility;


        $filename = sha1($articleFile->getClientOriginalName().date('i:s')). '.'.$articleFile->getClientOriginalExtension();
        $pathFileName = Storage::putFileAs('public/articulos-cientificos/files/', $articleFile, $filename);
        $sizeFile = Storage::size($pathFileName);
        if($sizeFile) $article->file = Storage::url('public/articulos-cientificos/files/'.$filename);

        if($image){
            $imageName = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathImageName = Storage::putFileAs('public/articulos-cientificos/images/', $image, $imageName);
            $sizeImage = Storage::size($pathImageName);
            if($sizeImage) $article->image = Storage::url('public/articulos-cientificos/images/'.$imageName);
        }

        $article->save();

        return redirect()->route('scientifics.index')
                        ->with('success','Artículo científico creado correctamente.');
    }

    public function update(Request $request, $article)
    {
        if( !is_numeric($article) ) return redirect()->back()->with('error', 'Identificador de infografía no válida.');

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'articleFile' => 'nullable|file',
            'articleImage' => 'nullable',
            'visibility' => 'required|string|min:0|max:1',
        ]);
 
        if( $validator->fails() ) return redirect()->back()->with('error', 'Hubo un error en el envío de los datos. Por favor, complete los datos correctamente.');

        $articleFile =  $request->articleFile;
        $image =  $request->articleImage;
        if($image && $image->getSize() > 500000) return redirect()->back()->with('error', 'Por favor, adjunte una imagen con un peso menor a 500 KB.');

        $articleFinded = Article::find($article);
        if( $articleFinded === null) return redirect()->back()->with('error', 'Infografía no existe.');

        $articleFinded->title = $request->title;
        $articleFinded->autor_id = Auth::user()->id;
        $articleFinded->visibility = $request->visibility;
        
        // Archivo
        if($articleFile){
            $filename = sha1($articleFile->getClientOriginalName().date('i:s')). '.'.$articleFile->getClientOriginalExtension();
            $pathFileName = Storage::putFileAs('public/articulos-cientificos/files/', $articleFile, $filename);
            $sizeFile = Storage::size($pathFileName);
            if($sizeFile) $articleFinded->file = Storage::url('public/articulos-cientificos/files/'.$filename);
        }

        // Imagen
        if($image){
            $imageName = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathImageName = Storage::putFileAs('public/articulos-cientificos/images/', $image, $imageName);
            $sizeImage = Storage::size($pathImageName);
            if($sizeImage) $articleFinded->image = Storage::url('public/articulos-cientificos/images/'.$imageName);
        }

        $articleFinded->save();

        return redirect()->route('scientifics.index')
                        ->with('success','Artículo actualizado correctamente.');
    }

}
