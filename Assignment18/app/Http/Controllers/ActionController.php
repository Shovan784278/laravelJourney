<?php

namespace App\Http\Controllers;

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


}
