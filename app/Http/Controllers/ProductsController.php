<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Shoes;
use App\Models\NewProducts;
use App\Models\Accessories;
use App\Models\Mobile;
use App\Models\AllProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductsController extends Controller
{
    public function index(Request $request){
        $categories = NewProducts::all();
        foreach($categories as $category){
            $catData[] = $category->Category;
        } 
        $catData = array_unique($catData);
        $catData = array_values($catData);
        $catData = Arr::sort($catData);
        $products = NewProducts::paginate(20);
        // if($request->ajax()){
        //      return response()->json(['data' => $products]);
        // }

        

    	return view('products',compact('catData','products'));
    }

    
    

    public function productDetail($slug){
        $product = NewProducts::where('Field1',$slug)->first();
        $products = NewProducts::paginate(20);
        return view('product-detail',compact('product','products'));
    }
    public function ProductWithCat($category,Request $request){
        
        $category = str_replace("-", " ", $category);
        $products = NewProducts::where('Category',$category)->paginate(20); 
        $categories = NewProducts::all();
        foreach($categories as $category){
            $catData[] = $category->Category;
        } 
        $catData = array_unique($catData);
        $catData = array_values($catData); 
        $catData = Arr::sort($catData);
        
        
        return view('category.products',compact('products','catData'));
        
    }

    public function DisplayMoreProducts(Request $request)
    {
    	$products = NewProducts::paginate(8);

        $html='';

        foreach ($products as $product) {
            $html.='<li>'.$product->id.' <strong>'.$product->Field1.'</strong> : '.$product->description.'</li>';
        }

        if ($request->ajax()) {
            return $html;
        }

    	return view('products');
    }

}
