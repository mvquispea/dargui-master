<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index($category)
    {
        $categoryFinded = Category::whereSlug($category)->first();
        if($categoryFinded == null) return abort(404);
        return view('categoria', [
                                'category' => $categoryFinded,
                                'menuActive' => $categoryFinded->slug,
                                ]);
    }
}
