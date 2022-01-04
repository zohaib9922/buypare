<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\NewProducts;
use App\Models\SearchTags;
use App\Models\LazadaProducts;
use App\Models\ShopeeProducts;
use Illuminate\Support\Arr;

use Elasticsearch;


class SearchController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->search;
        $Lazaadaproducts = LazadaProducts::where('Category', 'LIKE', "%{$search}%")->paginate(50);
        $products = ShopeeProducts::where('Category', 'LIKE', "%{$search}%")->paginate(50);
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
        
        return view('search.products',compact('Lazaadaproducts','catData','products'));
    }

    public function price(Request $request)
    {
        $search = '$'.$request->price;
        
        $Lazaadaproducts = LazadaProducts::where('Field6','<',$search)->where('Field6', '!=', '')
        ->orderByRaw("(Field6 = '{$search}') desc, length(Field6)")
        ->limit(10)->get();
        $categories = LazadaProducts::all();
        $categoriesLazada = LazadaProducts::all();
        foreach($categories as $category){
            $catData[] = $category->category;
        } 
        foreach($categoriesLazada as $category){
            $catData[] = $category->category;
        }
        $catData = array_unique($catData);
        $catData = array_values($catData);
        return view('search.products',compact('Lazaadaproducts','catData'));
    }
    
    

    public function autocomplete(Request $request){
        
        if($request->ajax()) { 
            
            $query = $request->search;
            $number  = strlen($query);
            
            $data = LazadaProducts::where('Category', 'LIKE',  $query.'%')->get();
 
            foreach($data as $category){
                $catData[] = $category->Category;
            } 

            $catData = array_unique($catData);
            $catData = array_values($catData);
            

            $output = '';
        
            if (count($data)>0) {
            
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                foreach ($catData as $row){
                    $output .= '<li class="list-group-item">'.$row.'</li>';
                    
                }
            
                $output .= '</ul>';
            }
            else {
            
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }

            return $output;
        }
        
    }
   
}
