<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function categoryAdd(Request $request){
        $data=$this->getCategoryData($request);

        Category::create($data);
        return back()->with(['category'=>"Category data added!!"]);
    }
    private function getCategoryData($request){
        return [
            'category_name'=>$request->categoryName,
            'brand_id'=>$request->category,
        ];
    }
}
