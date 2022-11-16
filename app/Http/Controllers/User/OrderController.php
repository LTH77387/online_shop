<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function userOrderPage($id){

        if(!auth::check()){
            return view('auth.register');
        }else{
            $data =Product::where('products.id',$id)
            ->get();
          return view('User.shop.seeMore')->with(['data'=>$data]);
        }

    }
}
