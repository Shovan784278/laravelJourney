<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoAction(){
       $products =  DB::table('products')->get();
       return $products;
    }

   //  function Brands(){
   //      $products =  DB::table('brands')->find(1);
   //      return $products;
   //   }

   //   function Brands(){
   //    $products =  DB::table('brands')->pluck('brandImg','brandName');
   //    return $products;
   // }

   function ProductsPrice(){
      //$products =  DB::table('products')->count();
      //$products =  DB::table('products')->max('price');
      //$products =  DB::table('products')->min('price');
      //$products =  DB::table('products')->average('price');
      //$products =  DB::table('products')->avg('price');
      //$products =  DB::table('products')->sum('price');

      
      //return $products;
   }

   function Clause(){
      $products = DB::table('products')->select('title','price','stock','discount','image')->get();
      return view('clause', ['products' => $products]);
   }

   function InnerJoin(){
      $products = DB::table('products')
         ->join('categories', 'products.category_id', '=', 'categories.id')
         ->join('brands', 'products.brand_id', '=', 'brands.id')
         ->get();

         return $products;
   }

   function LeftJoin(){
      $products = DB::table('products')
         ->rightJoin('categories', 'products.category_id', '=', 'categories.id')
         ->rightJoin('brands', 'products.brand_id', '=', 'brands.id')
         ->get();

         return $products;
   }

   function AdvanceJoin(){

      $products = DB::table('products')
         ->join('categories', function(JoinClause $join){
            $join->on('products.category_id', '=','products.id')
            ->where('products.price','>', 2000);

         })
         ->join('brands', function(JoinClause $join){
            $join->on('products.brand_id', '=','products.id')
         ->where('brands.brandName','=','Hatil');
         })
         
         ->get();

         return $products;
         

   }

   function Union(){

      $query = DB::table('products')->where('products.price',">",1400);
      $otherQuery = DB::table('products')->where('products.discount','=',1);
      $result = $query ->union($otherQuery)
      ->get();
      return $result;
   }


   function WhereClause(){

      $products = DB::table('products')
      //->where('products.title', 'NOT LIKE', '%Fur%')
      //->whereIn('products.price', [1500,2500])
      ->whereNotIn('products.price', [1500,2500])
      ->get();
      return $products;

   }


   function Order(){
      //It will return categoryName in ascending order
      //$data = DB::table('categories')->orderBy('categoryName','asc')->get(); 

      //It will return categoryName in descending order
      //$data = DB::table('categories')->orderBy('categoryName','desc')->get();

      //It will return categories or any table in inRandomOrder order
      $data = DB::table('categories')->inRandomOrder()
      ->first();
      return $data;

   }


   function Insert(){

      $insert = DB::table('brands')
         ->insert([
            'brandName' => 'DemoName',
            'brandImg' => 'DemoImg'
         ]);

         return $insert;

   }


   function InsertData(Request $request){

      $products = DB::table('brands')
        ->insert($request->input());

        return $products;

   }

   function UpdateData(Request $request){

      $data = DB::table('brands')
         ->where('id','=', $request->id)
         ->update($request->input());

         return $data;
   }

}
