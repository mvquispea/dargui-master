<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Validator, Auth, Storage;


class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::where('visibility', 1)->orderBy('created_at', 'desc')->paginate(6);
        return view('noticias',[
            'notices' => $notices
        ]);
    }

    public function list()
    {
        return view('admin/notices/index', [
            'notices' => Notice::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function destroy($notice)
    {
        if( !is_numeric($notice) ) return response()->json(['success'=>false, 'error' => 'Id no válido.'], 422);

        $noticeFinded = Notice::find($notice);

        $noticeFinded->delete();

        return response()->json([ 'success' => true ]);
    }

    public function create()
    {
        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"lista-noticias",'name'=>"Noticias"], 
            ['name'=>"Crear noticia"]
        ];
        return view('/admin/notices/create', [
                                                'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                            ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'visibility' => 'required|string|min:0|max:1',
            'text' => 'nullable|max:65535',
        ]);
 
        if( $validator->fails() ) return response()->json(['message' => 'Hubo un error en el envío de los datos. Por favor, complete los datos correctamente.', 'errors' => $validator->errors()], 422);

        $image =  $request->file('file');

        $notice = new Notice();
        $notice->title = $request->title;
        $notice->autor_id = Auth::user()->id;
        $notice->description = $request->text;
        $notice->visibility = $request->visibility;

        if($image){
            $filename = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathName = Storage::putFileAs('public/notices/images/',$request->file,$filename);
            $size = Storage::size($pathName);
            if($size) $notice->image = Storage::url('public/notices/images/'.$filename);
        }

        $notice->save();

        return response()->json([
            'success' => true,
            // 'data' => $request->all(),
            'notice' => $notice,
        ]);
    }

    public function show($notice)
    {
        if( !is_numeric($notice)  ) return abort(404);

        $noticeFinded = Notice::find($notice);
        if(is_null($noticeFinded)) return abort(404);

        return view('noticias/noticia', [
            'notice' => $noticeFinded,
            // 'menuActive' => 'articulos-cientificos',
            'menuActive' => 'noticias',
        ]);
    }

    public function edit($notice)
    {
        if( !is_numeric($notice) ) return abort(404);
        $noticeFinded = Notice::find($notice);
        if( is_null($noticeFinded) ) return abort(404);

        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"lista-noticias",'name'=>"Noticias"], 
            ['name'=>"Editar noticia"]
        ];

        return view('/admin/notices/edit', [    'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                                'notice' => $noticeFinded
                                                ]);
    }

    public function update(Request $request, $notice)
    {
        if( !is_numeric($notice) ) return response()->json(['success'=>false, 'error' => 'Id de noticia no válido.'], 422);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'visibility' => 'required|integer|min:0|max:1',
            'text' => 'nullable|max:65535',
        ]);
 
        if( $validator->fails() ) return response()->json(['message' => 'Hubo un error en el envío de los datos. Por favor, complete los datos correctamente.', 'errors' => $validator->errors()], 422);

        $notice = Notice::find($notice);

        if( $notice === null) return response()->json(['success'=>false, 'error' => 'Noticia no existe'], 422);

        $image =  $request->file('file');

        $notice->title = $request->title;
        $notice->description = $request->text;
        $notice->visibility = $request->visibility;

        if($image){
            $filename = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathName = Storage::putFileAs('public/notices/images/',$request->file,$filename);
            $size = Storage::size($pathName);
            if($size) $notice->image = Storage::url('public/notices/images/'.$filename);
        }

        $notice->save();

        return response()->json(['success'=> true]);
    }
}
