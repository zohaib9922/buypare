<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Shoes;
use App\Models\NewProducts;
use App\Models\ShopeeProducts;
use App\Models\LazadaProducts;
use App\Models\Accessories;
use App\Models\Mobile;
use App\Models\AllProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductsController extends Controller
{
    public function index(Request $request){
        $Lazaadaproducts = LazadaProducts::paginate();
        $products = ShopeeProducts::paginate(10);
        
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
       
        // if($request->ajax()){
        //      return response()->json(['data' => $products]);
        // }

    	return view('products',compact('catData','products','Lazaadaproducts'));
    }

    
    

    public function productDetail($slug){
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

        $product = ShopeeProducts::where('field_one',$slug)->first();
        if(empty($product)){
            $product = LazadaProducts::where('product_title',$slug)->first();    
        } 

        $products = LazadaProducts::where('category',$product->category)->limit(10)->get();    
        

        return view('product-detail',compact('product','catData','products'));
    }
    public function ProductWithCat($category,Request $request){
        
        $category = str_replace("-", " ", $category);

        $products = ShopeeProducts::where('category',$category)->paginate(20); 
        $Lazaadaproducts = LazadaProducts::where('category',$category)->paginate(20);

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
        
        

        
        
        return view('category.products',compact('products','catData','Lazaadaproducts'));
        
    }

    public function DisplayMoreProducts(Request $request)
    {
    	$products = ShopeeProducts::paginate(8);

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
