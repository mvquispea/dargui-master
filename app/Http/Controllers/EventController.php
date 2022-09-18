<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Validator, Auth, Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('visibility',1)->orderBy('created_at', 'desc')->paginate(12);

        return view('eventos',[
            'events' => $events
        ]);
    }

    public function list()
    {
        return view('admin/events/index', [
            'events' => Event::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function destroy($event)
    {
        if( !is_numeric($event) ) return response()->json(['success'=>false, 'error' => 'Id no válido.'], 422);

        $eventFinded = Event::find($event);

        $eventFinded->delete();

        return response()->json([ 'success' => true ]);
    }

    public function create()
    {
        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"lista-eventos",'name'=>"Eventos"], 
            ['name'=>"Crear evento"]
        ];
        return view('/admin/events/create', [
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

        $event = new Event();
        $event->title = $request->title;
        $event->autor_id = Auth::user()->id;
        $event->description = $request->text;
        $event->visibility = $request->visibility;

        if($image){
            $filename = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathName = Storage::putFileAs('public/events/images/',$request->file,$filename);
            $size = Storage::size($pathName);
            if($size) $event->image = Storage::url('public/events/images/'.$filename);
        }

        $event->save();

        return response()->json([
            'success' => true,
            // 'data' => $request->all(),
            'event' => $event,
        ]);
    }

    public function show($event)
    {
        if( !is_numeric($event)  ) return abort(404);

        $eventFinded = Event::find($event);
        if(is_null($eventFinded)) return abort(404);

        return view('eventos/evento', [
            'event' => $eventFinded,
            // 'menuActive' => 'articulos-cientificos',
            'menuActive' => 'eventos',
        ]);
    }

    public function edit($event)
    {
        if( !is_numeric($event) ) return abort(404);
        $eventFinded = Event::find($event);
        if( is_null($eventFinded) ) return abort(404);

        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link'=>"admin",'name'=>"Inicio"],
            ['link'=>"lista-eventos",'name'=>"Eventos"], 
            ['name'=>"Editar evento"]
        ];

        return view('/admin/events/edit', [    'breadcrumbs' => $breadcrumbs, 
                                                'pageConfigs' => $pageConfigs,
                                                'event' => $eventFinded
                                                ]);
    }

    public function update(Request $request, $event)
    {
        if( !is_numeric($event) ) return response()->json(['success'=>false, 'error' => 'Id de evento no válido.'], 422);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'visibility' => 'required|integer|min:0|max:1',
            'text' => 'nullable|max:65535',
        ]);
 
        if( $validator->fails() ) return response()->json(['message' => 'Hubo un error en el envío de los datos. Por favor, complete los datos correctamente.', 'errors' => $validator->errors()], 422);

        $event = Event::find($event);

        if( $event === null) return response()->json(['success'=>false, 'error' => 'Evento no existe'], 422);

        $image =  $request->file('file');

        $event->title = $request->title;
        $event->description = $request->text;
        $event->visibility = $request->visibility;

        if($image){
            $filename = sha1($image->getClientOriginalName().date('i:s')). '.'.$image->getClientOriginalExtension();
            $pathName = Storage::putFileAs('public/events/images/',$request->file,$filename);
            $size = Storage::size($pathName);
            if($size) $event->image = Storage::url('public/events/images/'.$filename);
        }

        $event->save();

        return response()->json(['success'=> true]);
    }
}
