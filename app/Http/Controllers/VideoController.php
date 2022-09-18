<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Video;
use Validator, Auth, Storage;

class VideoController extends Controller
{

    public function index()
    {
        return view('admin/videos/index', [
            'videos' => Video::orderBy('created_at','desc')->orderBy('orden','desc')->get(),
        ]);
    }

    public function indexPublic($category)
    {
        $categoryFinded = Category::whereSlug($category)->first();
        if($categoryFinded == null) return abort(404);
        return view('videos', [
                                'category' => $categoryFinded,
                                'menuActive' => $categoryFinded->slug,
                                ]);
    }

    public function showPublic($category, $video)
    {
        if( !is_numeric($video)  ) return abort(404);
        $category = Category::whereSlug($category)->first();
        if(is_null($category)) return abort(404);

        $videoFinded = Video::find($video);
        if(is_null($videoFinded)) return abort(404);

        return view('medicina/video', [
            'category' => $category,
            'video' => $videoFinded,
            'menuActive' => $category->slug,
        ]);
    }


    public function create()
    {
        $categories = Category::all();
        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"videos",'name'=>"Videos"], 
            ['name'=>"Crear video"]
        ];
        return view('/admin/videos/create', [
                                                'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                                'categories' => $categories,
                                            ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'url' => 'required|url|min:3|max:191',
            'visibility' => 'required|string|min:0|max:1',
            'category' => 'nullable|integer|min:1|max:10',
            'text' => 'nullable|max:65535',
        ]);
 
        if( $validator->fails() ) return response()->json(['message' => 'Hubo un error en el envío de los datos. Por favor, complete los datos correctamente.', 'errors' => $validator->errors()], 422);

        $image =  $request->file('file');

        $video = new Video();
        $video->title = $request->title;
        $video->category_id = $request->category;
        $video->autor_id = Auth::user()->id;
        $video->description = $request->text;
        $video->url = $request->url;
        $video->visibility = $request->visibility;

        if($image){
            $filename = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathName = Storage::putFileAs('public/videos/images/',$request->file,$filename);
            $size = Storage::size($pathName);
            if($size) $video->image = Storage::url('public/videos/images/'.$filename);
        }

        $video->save();

        return response()->json([
            'success' => true,
            'data' => $request->all(),
            'video' => $video,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($video)
    {
        if( !is_numeric($video) ) return abort(404);
        $categories = Category::all();
        $videoFinded = Video::find($video);
        if( is_null($videoFinded) ) return abort(404);

        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"videos",'name'=>"Videos"], 
            ['name'=>"Editar video"]
        ];
        return view('/admin/videos/edit', [    'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                                'categories' => $categories,
                                                'video' => $videoFinded
                                                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $video)
    {
        if( !is_numeric($video) ) return response()->json(['success'=>false, 'error' => 'Id de video no válido.'], 422);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'url' => 'required|url|min:3|max:191',
            'visibility' => 'required|integer|min:0|max:1',
            'category' => 'nullable|integer|min:1|max:10',
            'text' => 'nullable|max:65535',
        ]);
 
        if( $validator->fails() ) return response()->json(['message' => 'Hubo un error en el envío de los datos. Por favor, complete los datos correctamente.', 'errors' => $validator->errors()], 422);


        $video = Video::find($video);

        if( $video === null) return response()->json(['success'=>false, 'error' => 'Vide no existe'], 422);

        $image =  $request->file('file');

        $video->title = $request->title;
        $video->category_id = $request->category;
        $video->description = $request->text;
        $video->url = $request->url;
        $video->visibility = $request->visibility;

        if($image){
            $filename = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathName = Storage::putFileAs('public/videos/images/',$request->file,$filename);
            $size = Storage::size($pathName);
            if($size) $video->image = Storage::url('public/videos/images/'.$filename);
        }

        $video->save();

        return response()->json(['success'=> true]);
    }

    public function destroy($video)
    {
        if( !is_numeric($video) ) return response()->json(['success'=>false, 'error' => 'Id no válido.'], 422);

        $videoFinded = Video::find($video);

        $videoFinded->delete();

        return response()->json([ 'success' => true ]);
    }
}
