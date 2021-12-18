<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProducts;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index()
    {
        $categories = NewProducts::all();
        foreach($categories as $category){
            $catData[] = $category->Category;
        } 
        $catData = array_unique($catData);
        $catData = array_values($catData);
        $catData = Arr::sort($catData);

        return view('pages.index',compact('catData'));

        
    }

    public function commingsoon(){
        return view('coming-soon');
    }
}
