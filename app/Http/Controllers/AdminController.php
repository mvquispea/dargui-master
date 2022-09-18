<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
    public function home(){
        $breadcrumbs = [
            ['name'=>"Inicio"]
        ];
        return view('/admin/home', [
            'breadcrumbs' => $breadcrumbs,
            'categories' => Category::all(),
        ]);
    }
}
