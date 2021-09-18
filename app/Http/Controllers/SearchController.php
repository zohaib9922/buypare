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
         $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
         foreach($data as $row)
         {
            if(!empty($output)){
                $output .= '
                <li><a href="'.$row->Title_URL.'">'.$row->Title.'</a></li>
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
