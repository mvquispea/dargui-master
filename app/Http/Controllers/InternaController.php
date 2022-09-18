<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Article;
use App\Infographic;

class InternaController extends Controller
{
    public function cientificos()
    {
        $articles = Article::where('category_id', 5)->orderBy('created_at','desc')->get();
        return view('cientificos', [
            'articles' => $articles,
            'menuActive' => 'articulos-cientificos',
        ]);
    }

    public function expertos()
    {
        return view('expertos');
    }
    
    public function abc()
    {
        return view('abc');
    }

    public function multimedia()
    {
        return view('multimedia');
    }

    public function showMultimedia($multimedia)
    {
        switch ($multimedia) {
            case 'videos':
                return view('multimedia/videos', [
                    'videos' => Video::where('visibility',1)->orderBy('created_at','desc')->orderBy('orden','desc')->get(),
                ]);
            case 'fotos':
                return view('multimedia/fotos');
            case 'podcasts':
                return view('multimedia/podcasts');
            case 'infografias':
                return view('multimedia/infografias', [
                    'infographics' => Infographic::where('visibility',1)->orderBy('created_at', 'desc')->orderBy('orden','desc')->get(),
                ]);
            default:
                return abort(404);
        }
    }

    // public function showArticulo($articulo)
    // {
    //     switch ($articulo) {
    //         case '1':
    //             return view('medicina/articulo_uno');
    //         case '2':
    //             return view('medicina/articulo_dos');
    //         case '3':
    //             return view('medicina/articulo_tres');
    //         default:
    //             return abort(404);
    //     }
    // }

    public function search($busqueda)
    {
        // con categoria incluida
        $articles   = Article::withSearch($busqueda);
        // sin categoria incluida
        $videos     = Video::where('title', 'like', '%' . $busqueda . '%')
                            ->orWhere('description', 'like', '%' . $busqueda . '%')->get();
        $infographics = Infographic::where('title', 'like', '%' . $busqueda . '%')->get();
        return view('busqueda',[
            'busqueda' => $busqueda,
            'articles' => $articles,
            'videos' => $videos,
            'infographics' => $infographics,
        ]);
    }

}
