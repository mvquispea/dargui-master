<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Storage, Auth;
use App\Category;
use App\Infographic;

class InfographicController extends Controller
{
    public function index()
    {
        $categories = Infographic::withCategories();
        return view('admin/infographics/index', [
            'infographics' => $categories,
        ]);
    }

    public function indexPublic($category)
    {
        $categoryFinded = Category::whereSlug($category)->first();
        if($categoryFinded == null) return abort(404);
        return view('infografias', [
                                'category' => $categoryFinded,
                                'menuActive' => $categoryFinded->slug,
                                ]);
    }

    public function showPublic($category, $infographic)
    {
        if( !is_numeric($infographic)  ) return abort(404);
        $category = Category::whereSlug($category)->first();
        if(is_null($category)) return abort(404);

        $infographicFinded = Infographic::find($infographic);
        if(is_null($infographicFinded)) return abort(404);

        return view('medicina/infografia', [
            'category' => $category,
            'infographic' => $infographicFinded,
            'menuActive' => $category->slug,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"infografias",'name'=>"Infografías"], 
            ['name'=>"Crear infografía"]
        ];
        return view('/admin/infographics/create', [
                                                'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                                'categories' => $categories,
                                            ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'infografiaFile' => 'required|file',
            'infografiaImage' => 'nullable',
            'visibility' => 'required|string|min:0|max:1',
            'category' => 'nullable|integer|min:1|max:10',
            'description' => 'nullable|max:65535',
        ]);
 
        if( $validator->fails() ) return redirect()->back()->with('error', 'Hubo un error en el envío de los datos. Por favor, complete los datos correctamente.');

        $fileInfografia =  $request->infografiaFile;
        $image =  $request->infografiaImage;

        if($image && $image->getSize() > 500000) return redirect()->back()->with('error', 'Por favor, adjunte una imagen con un peso menor a 500 KB.');

        $infographic = new Infographic();
        $infographic->title = $request->title;
        $infographic->category_id = $request->category;
        $infographic->autor_id = Auth::user()->id;
        $infographic->description = $request->description;
        $infographic->visibility = $request->visibility;


        $filename = sha1($fileInfografia->getClientOriginalName().date('i:s')). '.'.$fileInfografia->getClientOriginalExtension();
        $pathFileName = Storage::putFileAs('public/infografias/files/', $fileInfografia, $filename);
        $sizeFile = Storage::size($pathFileName);
        if($sizeFile) $infographic->file = Storage::url('public/infografias/files/'.$filename);

        if($image){
            $imageName = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathImageName = Storage::putFileAs('public/infografias/images/', $image, $imageName);
            $sizeImage = Storage::size($pathImageName);
            if($sizeImage) $infographic->image = Storage::url('public/infografias/images/'.$imageName);
        }

        $infographic->save();

        return redirect()->route('infographics.index')
                        ->with('success','Infografía creada correctamente.');
    }

    public function edit($infographic)
    {
        if( !is_numeric($infographic) ) return abort(404);
        $categories = Category::all();
        $infographicFinded = Infographic::withAuthor($infographic);
        if( is_null($infographicFinded) ) return abort(404);

        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"infografias",'name'=>"Infografías"], 
            ['name'=>"Editar infografía"]
        ];
        return view('/admin/infographics/edit', [    'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                                'categories' => $categories,
                                                'infographic' => $infographicFinded
                                                ]);
    }

    public function update(Request $request, $infographic)
    {
        // dd($request->all());

        if( !is_numeric($infographic) ) return redirect()->back()->with('error', 'Identificador de infografía no válida.');

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'infografiaFile' => 'nullable|file',
            'infografiaImage' => 'nullable',
            'visibility' => 'required|string|min:0|max:1',
            'category' => 'nullable|integer|min:1|max:10',
            'description' => 'nullable|max:65535',
        ]);
 
        if( $validator->fails() ) return redirect()->back()->with('error', 'Hubo un error en el envío de los datos. Por favor, complete los datos correctamente.');

        $fileInfografia =  $request->infografiaFile;
        $image =  $request->infografiaImage;
        if($image && $image->getSize() > 500000) return redirect()->back()->with('error', 'Por favor, adjunte una imagen con un peso menor a 500 KB.');

        $infographicFinded = Infographic::find($infographic);
        if( $infographicFinded === null) return redirect()->back()->with('error', 'Infografía no existe.');

        $infographicFinded->title = $request->title;
        $infographicFinded->category_id = $request->category;
        $infographicFinded->autor_id = Auth::user()->id;
        $infographicFinded->description = $request->description;
        $infographicFinded->visibility = $request->visibility;
        
        // Archivo
        if($fileInfografia){
            $filename = sha1($fileInfografia->getClientOriginalName().date('i:s')). '.'.$fileInfografia->getClientOriginalExtension();
            $pathFileName = Storage::putFileAs('public/infografias/files/', $fileInfografia, $filename);
            $sizeFile = Storage::size($pathFileName);
            if($sizeFile) $infographicFinded->file = Storage::url('public/infografias/files/'.$filename);
        }

        // Imagen
        if($image){
            $imageName = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathImageName = Storage::putFileAs('public/infografias/images/', $image, $imageName);
            $sizeImage = Storage::size($pathImageName);
            if($sizeImage) $infographicFinded->image = Storage::url('public/infografias/images/'.$imageName);
        }

        $infographicFinded->save();

        return redirect()->route('infographics.index')
                        ->with('success','Infografía actualizada correctamente.');
    }

    public function destroy($infographic)
    {
        if( !is_numeric($infographic) ) return response()->json(['success'=>false, 'error' => 'Id no válido.'], 422);

        $infographicFinded = Infographic::find($infographic);

        $infographicFinded->delete();

        return response()->json([ 'success' => true ]);
    }

}
