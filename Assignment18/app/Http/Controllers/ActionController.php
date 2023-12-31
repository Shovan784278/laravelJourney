<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function postData()
    {
        $postdata = Post::with('category')->get();
        return  $postdata;
    }

     //Task 6
    //controller method for testing in Postman
    public function categoryPost($category_id)
    {
        $postCount = Post::totalPostsCountByCategory($category_id);
        return response()->json(['Count' => $postCount]); 
    }

    //Task 7
    public function softDelete($id)
    {
        $softDelete = Post::findOrFail($id)->delete();
        if ($softDelete) {
            return 'successfully soft deleted';
        } else {
            return 'failed to softdelete';
        }
    }


    //Task 8
    //controller method for testing in Postman
    public function softData()
    {
        $softData = Post::softDeletedData();;
        return $softData;
    }


     //Task 9
     public function allPost()
     {
         $postdata = Post::with('category')->get();
 
         return view('pages.home', compact('postdata'));
     }

      //Task 10
    public function specificCatPost($id)
    {
        try {
            $category = Category::findOrFail($id);
            return $category->posts;
        } catch (\Exception $e) {
            return 'Category not found.';
        }
    }

    //Task 11 main method is declared in Category model
    //here i have  declared this method for testing purpose
    public function latestPost($id)
    {
        $category = Category::findOrFail($id)->LatestPost();
        return $category;
    }

     //Task 12
     public function CategoriesLatestPosts()
     {
         $categories = Category::all();
 
         return view('pages.categories', compact('categories'));
     }


}
