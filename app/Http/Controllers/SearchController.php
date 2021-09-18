<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class SearchController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }
    
    public function fetch(Request $request)
    {
        // $search = $request->get('term');
        // $data = product::where('Title', 'LIKE', "%{$search}%")->get();
       
        // return response()->json($data);
        if($request->get('query'))
        {
         $query = $request->get('query');
         $data = product::where('Title', 'LIKE', "%{$query}%")->get();
         $output = '<ul class="dropdown-menu" style="display:block; position:relative">
         <li class="search-suggestion"><b>Popular Products</b></li>
         ';
         foreach($data as $row)
         {
            if(!empty($output)){
                $output .= '
                <li class="search-listing">
                    <div class="row">
                        <div class="col-md-1">
                            <img class="search-image" src="/images/search-img.jpeg">
                        </div>
                        <div class="col-md-9 flex-title">
                            <a href="'.$row->Title_URL.'">'.$row->Title.'</a>
                        </div>
                        <div class="col-md-2">
                            <span>'.$row->Column_1d9_77.'</span>
                        </div>
                    </div>
                </li>
                ';
            }
         }
         $output .= '</ul>';
         if(!empty($output)){
            echo $output;
         }
        }
    }
   
}
