<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        return view("zgenadmin.index");
    }
    public function addPostScreen(){
        return view("zgenadmin.addpost");
    }
    public function addPost(Request $request){
        $posts = new Posts();
        $posts->uuid = (string) Str::uuid();
        $posts->categories = $request->input("categories");
        $posts->header = $request->input("header");
        $posts->content = $request->input("content");
        $posts->hit = 0;
        $posts->save();
        return redirect("/panel/dashboard");
        
    }
    public function removeGet(){
        $posts = Posts::all();
        return view("zgenadmin.remove",["posts" => $posts]);
    }
    public function removePost($id){
        $posts = Posts::find($id);
        $posts->delete();
        return view("zgenadmin.index");
    }
    public function getCategories(){
        $categories = Posts::all();
        return view("zgenadmin.categories",["categories" => $categories]);
    }
    public function addCategories(Request $request){
        $categories = new Categories();
        $categories->category = $request->input("categories");
        $categories->save();
        return redirect("/panel/addcategories");
        
    }
}
