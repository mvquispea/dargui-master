<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Storage;
class TestController extends Controller
{
    public function test()
    {        
        // phpinfo();
        dd(env('APP_ENV'));
        // dd( Storage::disk()->url('hola') );
        // dd(Category::all());
    }
}
