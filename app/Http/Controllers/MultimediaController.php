<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Infographic;

class MultimediaController extends Controller
{
    public function showItem($multimedia, $item)
    {
        if($multimedia === 'videos' && is_numeric($item)){
            return view('multimedia/video_item', [
                'video' => Video::where('id', $item)->where('visibility', 1)->first(),
            ]);
        }
        if($multimedia === 'infografias' && is_numeric($item)){
            $infographic = Infographic::where('id', $item)->where('visibility', 1)->first();
            if(is_null($infographic)) return abort(404);
            return view('multimedia/infografia_item', [
                'infografia' => $infographic,
            ]);
        }

        return abort(404);
    }
}
