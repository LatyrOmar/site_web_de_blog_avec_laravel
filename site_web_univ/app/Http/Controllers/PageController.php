<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Category;

class PageController extends Controller
{
    //
    function Home (Request $request):View{
        $categories = Category::all();
        return view('components.home',compact("categories"));
    }

}
