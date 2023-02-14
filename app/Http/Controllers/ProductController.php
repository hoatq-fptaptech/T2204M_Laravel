<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
//        $data = Product::all();// select * from products
//        $data = Product::limit(20)->orderBy("id","desc")->get();// collection
        $data = Product::orderBy("id","desc")->paginate(20); // Paginator : ds co phan trang
        return view("admin.product.list",compact("data"));
//        return view("admin.product.list",[
//            "data"=>$data
//        ]);
    }

    public function create(){
        $categories = Category::all();
        return view("admin.product.create",compact('categories'));
    }

    public function store(Request $request){
        // nhan data tu form
        $data = $request->all();
        Product::create($data);
        return redirect()->to("/admin/product");
    }
}
