<?php

namespace App\Http\Controllers;

use App\categories;
use App\products;
use App\mymodel;
use Request;
use DB;
use Illuminate\Support\Facades\Input;
//use app/mymodel;

class Home extends Controller
{

    public function index(){
$data['categories'] =  DB::table('categories')
    ->where('inactive', '=' , 0)
    ->where('parent_id', '=', 0)
    ->get();
$data['random_products'] = products::inRandomOrder()
        ->limit(12)
        ->get();
        return view('index', $data);
    }
    public function routes(){
        $url = Request::segments();
        $last = end($url);
        $res= products::where('sku', $last)->get();
        $id = $res->count();
        if($id){
            return   $this->products_details($url);
        }
        else{
          return  $this->product_by_categories($url);
        }
    }

    public function product_by_categories($url){
       $page_id = implode('/', $url);
       $get= categories::where('page_url', '=', $page_id)
       ->get();
       foreach ($get as $id) {
           $cat_id =  $id->id;
           $cat_name = $id->name;
           break;
       }
       //categories
        $categories =  DB::table('categories')
            ->where('inactive', '=' , 0)
            ->where('parent_id', '=', 0)
            ->get();
       //end categories
       // products list
            $users = DB::table('categories as c')
            ->Join('categories as ca', 'c.id', '=', 'ca.parent_id')
            ->Join('categories as cb', 'ca.id', '=', 'cb.parent_id')
            ->join('products as p', 'cb.id', '=', 'p.category_id')
            ->where('c.id', $cat_id)
            ->select('p.*')
            ->get();
            $data = $users->count();
            if($data == 0){
                $users = DB::table('categories as c')
                ->Join('categories as ca', 'c.id', '=', 'ca.parent_id')
                ->join('products as p', 'ca.id', '=', 'p.category_id' )
                ->where('c.id', $cat_id)
                ->select('p.*')
                ->get();
                $data = $users->count();                
            }
            if($data == 0){
                $users = DB::table('products')
                ->where('category_id', $cat_id)
                ->select('*')
                ->get();
            }
         // end products list
        // sub categories
        $sub_cat = categories::where('parent_id', '=',  $cat_id)
            ->where('inactive', '=',  0)
            ->get();
        // end subcat
        $data = array();
        $data['categories'] = $categories;
       $data['products_list'] = $users;
        $data['cat_name'] = $cat_name;
        $data['sub_cat']  = $sub_cat;
  return view('productlist', $data);
    }
    public function  products_details($url){
        $sku = end($url);
        $data['categories'] =  DB::table('categories')
            ->where('inactive', '=' , 0)
            ->where('parent_id', '=', 0)
            ->get();
        $users = products::where('sku', $sku)
            ->select('*')
            ->get();
        foreach ($users as $value){
            $data['product'] = $value;
        }
        return view('product', $data);
        }
        public function contact_us(){
            $data['categories'] =  DB::table('categories')
                ->where('inactive', '=' , 0)
                ->where('parent_id', '=', 0)
                ->get();
            $data['random_products'] = products::inRandomOrder()
                ->limit(12)
                ->get();
            return view('contactus', $data);
        }
    public function about_us(){
        $data['categories'] =  DB::table('categories')
            ->where('inactive', '=' , 0)
            ->where('parent_id', '=', 0)
            ->get();
        $data['random_products'] = products::inRandomOrder()
            ->limit(12)
            ->get();
        return view('aboutus', $data);
    }
    public function search(Request $request){
    $search =  Input::get('search');
    $data['pro_search'] = products::where('name', 'like', $search)
        ->where('inactive', '=', 0)
        ->get();
    $data['cat_search'] = categories::orWhere('name', 'like', '%' .$search . '%')
//            ->where('inactive', '=', 0)
            ->get();
        $data['categories'] =  DB::table('categories')
            ->where('inactive', '=' , 0)
            ->where('parent_id', '=', 0)
            ->get();
return view('search_products', $data);
    }
    public function login(){
        $data['categories'] =  DB::table('categories')
            ->where('inactive', '=' , 0)
            ->where('parent_id', '=', 0)
            ->get();
        return view('login', $data);
    }
    public  function register(){
        $data['categories'] =  DB::table('categories')
            ->where('inactive', '=' , 0)
            ->where('parent_id', '=', 0)
            ->get();
        return view('register', $data);
    }
    public function download_catalogs(){

    }
    public function compare(){

    }
}
