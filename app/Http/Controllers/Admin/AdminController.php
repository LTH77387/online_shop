<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function adminHome(){
        return view('Admin.index');
    }
    public function adminCategory(){
        $data = Category::get();
    return view('Admin.Category.categoryPage')->with(['category'=>$data]);
    }
public function addCategory(){
    $data=Brand::get();
    return view('Admin.Category.addCategory')->with(['categoryData'=>$data]);
}
public function adminBrand(){
    $data=Brand::get();
    return view('Admin.Brand.BrandPage')->with(['brandData'=>$data]);
}
public function addBrand(){




    return view('Admin.Brand.addBrand');

}
public function brandAdd(Request $request){
    $file=$request->file('brandImage');

    $fileName=uniqid() . '_' . $file->getClientOriginalName();

    $file->move(public_path() . '/uploads/' , $fileName);
    $data=$this->getBrandData($request,$fileName);
    Brand::create($data);
    return back()->with(['addBrand'=>"Brand added!"]);
}
public function productPage(){
    $data = Product::get();
    return view('Admin.Product.productPage')->with(['product'=>$data]);
}
public function addProduct(){
    $user = Category::select('categories.*','categories.id as category_id','brands.*','brands.id as brand_id')
    ->join('brands','brands.id','categories.brand_id')
    ->get();

    return view('Admin.Product.addProduct')->with(['productData'=>$user]);
}
public function productAdd(Request $request){
    $file=$request->file('productImage');

    $fileName=uniqid() . '_' . $file->getClientOriginalName();

    $file->move(public_path() . '/uploads/' , $fileName);
    $getData = $this->getProductData($request,$fileName);
    Product::create($getData);
    return back()->with(['product'=>'Product inserted successfully!']);
}
private function getBrandData( $request,$fileName){
return [
    'brand_name'=>$request->brandName,
    'brand_image'=>$fileName,
    ];
}
private function getProductData($request,$fileName){
    return [
        'product_name'=>$request->productName,
        'product_price'=>$request->productPrice,
        'product_image'=>$fileName,
        'publish_status'=>$request->publishStatus,
        'discount_price'=>$request->discountPrice,
        'brand_id'=>$request->brandID,
        'category_id'=>$request->category,
    ];
}
}

