<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Admin Controllers
    public function index(){
        return view("zgenadmin.index");
    }
    public function addPostScreen(){
        $cats = Categories::select(["category","id"])
        ->orderBy("category","asc")
        ->get();
        return view("zgenadmin.addpost",["category"=>$cats]);
    }
    public function addPost(Request $request){
        $posts = new Posts();
        $categories = (int) $request->input("categories");
        $posts->uuid = (string) Str::uuid();
        $posts->categories = $categories;
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

    // Website Controllers

    public function websiteindex(){
        $posts = Posts::select("*")
                        ->take(12)
                        ->orderBy("created_at","desc")
                        ->get();
        $hitPosts = Posts::select("*")
        ->take(4)
        ->orderBy("hit","desc")
        ->get();
        //$categories = Categories::select(["categories","id"]);
        return view("zgenwebsite.index",["posts" => $posts,"hitPosts"=> $hitPosts]);
    }

    // Slug Controller
    public function show($slug) {
        $slug = explode('/', $slug);
        if(isset($slug[1])) {
            return 'Post Çek';
        } else {
            return 'Kategori postlarını çek';
        }
    }
} 
