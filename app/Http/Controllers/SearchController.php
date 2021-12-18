<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\NewProducts;
use App\Models\SearchTags;
use Elasticsearch;


class SearchController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->search;
        $products = NewProducts::where('Category', 'LIKE', "%{$search}%")->paginate(50);
        $categories = NewProducts::all();
        foreach($categories as $category){
            $catData[] = $category->Category;
        } 
        $catData = array_unique($catData);
        $catData = array_values($catData);
        return view('search.products',compact('products','catData'));
    }

    public function price(Request $request)
    {
        $search = '$'.$request->price;
        
        $products = NewProducts::where('Field6','<',$search)->where('Field6', '!=', '')
        ->orderByRaw("(Field6 = '{$search}') desc, length(Field6)")
        ->limit(10)->get();
        $categories = NewProducts::all();
        foreach($categories as $category){
            $catData[] = $category->Category;
        }
        $catData = array_unique($catData);
        $catData = array_values($catData);
        return view('search.products',compact('products','catData'));
    }
    
    

    public function autocomplete(Request $request){
        
        if($request->ajax()) { 
            
            $query = $request->search;
            $number  = strlen($query);
            
            $data = NewProducts::where('Category', 'LIKE',  $query.'%')->get();
 
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
