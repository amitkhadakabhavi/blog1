<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function category()
    {
    	return view('category.category');
    }


    public function addcategory(Request $request){
    Sthis- >validate($request,['category'=> 'required']);
    }
}

?>