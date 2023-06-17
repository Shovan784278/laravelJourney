<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts= DB::table('posts')->select('excerpt','description')->get();
        // return $posts;

        // $users = DB::table('users')
        //     ->select('name', 'email')
        //     ->distinct()
        //     ->get();

        // $posts=DB::table('posts')->where('id',2)->first();
        // dd($posts);

        // $posts=DB::table('posts')->where('id',2)->first();
        // dd($posts->description);

        // $posts=DB::table('posts')->where('id',2)->value('description');
        // dd($posts);

        // $posts=DB::table('posts')->find(2);
        // dd($posts);

        // $posts=DB::table('posts')->pluck('title');
        // dd($posts);


    //     $updated=DB::table( 'posts' )
    //     ->where( 'id', 2 )
    //    ->update( [
    //        'excerpt'     => 'Laravel 10',
    //        'description' => 'Laravel 10',
    //    ] );
   
    //     dd($updated);


    // DB::table('posts')
    // ->where('id', 3)
    // ->delete();

   // DB::table('posts')->count();


    //DB::table('posts')->sum('min_to_read'); 

    //DB::table('posts')->avg('min_to_read');


    //DB::table('posts')->where('is_published', true)->max('min_to_read');


    //DB::table('posts')->where('is_published', true)->min('min_to_read');


    //DB::table('posts')->whereNot('min_to_read', '>', 1)->get(); 


    // if(DB::table('posts')->where('id', 343543)->exists()) {
    //     echo 'This is exist';
    // } else {
    //     echo 'This does not exist!';
    // }


    // if(DB::table('posts')->where('id', 343543)->doesntExist()) {
    //     echo 'Yes! This is match the post';
    // } else {
    //     echo 'Ahh, I have not found a match';
    // }


    // $posts = DB::table('posts')->whereBetween('min_to_read', [1, 5])->get();
    // dd($posts);

    $posts = DB::table('posts')->where('id',4)->increment('min_to_read', 1);
    dd($posts);
    
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
