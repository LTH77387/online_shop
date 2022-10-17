<?php

namespace App\Http\Controllers\User;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function shopNow(){
     if(!Auth::check()){
        return view('auth.register');
     }else{
         dd('old user');
     }
   }
   public function shopPage(){

       $userData=Product::select('products.*','products.id as product_id','categories.*','categories.id as category_id','brands.*','brands.id as brand_id')
       ->leftJoin('categories','categories.id','products.category_id')
       ->leftJoin('brands','brands.id','products.brand_id')
       ->get();
    //    dd($userData->toArray());
       return view('User.shop.shopPage')->with(['data'=>$userData]);
   }
}
