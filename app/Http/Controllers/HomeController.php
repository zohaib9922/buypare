<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopeeProducts;
use App\Models\LazadaProducts;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index()
    {
        $categories = ShopeeProducts::all();
        $categoriesLazada = LazadaProducts::all();
        foreach($categories as $category){
            $catData[] = $category->category;
        } 
        foreach($categoriesLazada as $category){
            $catData[] = $category->category;
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
