<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \Input as Input;
use App\Products;
use App\Redirect;

class ProductsController extends Controller
{

    public function showlist()
    {

        $products = DB::table('products')->paginate(1);


        return view('listproducts',['products' => $products]);
    }


    public function show()
    {

      return view('products');
    }

    public function store(Request $request)
    {
        
        $this->validate(request(), 
        [
            'category' => 'required|max:40',
            'title' => 'required|max:50',
            'saleby' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'location' => 'required', 
            'file' => 'image'

        ]);

        //echo "UPLOADED";

       if(Input::hasFile('img')){
          //echo 'asdasd';
          $file = Input::file('img');
          $file->move('uploads', $file->getClientOriginalName());

          //$destinationPath = public_path(). '/uploads/';
          //$filename = public_path() . '\uploads\\' . $file->getClientOriginalName();
          $filename = $file->getClientOriginalName();
          //$file->move($destinationPath, $filename);
          //echo $request->category;
          //echo  $filename;
           //echo '<img src="uploads/'. $filename . '"/>';

           $product = Products::create([
                'category' => $request->category,
                'title' => $request->title,
                'saleby' => $request->saleby,
                'price' => $request->price,
                'description' => $request->description,
                'location' => $request->location,
                'image' => $filename,
           ]);

           //$prod_id = DB::select('select id from products order by id desc limit 1');
           $prod = DB::table('products')->orderBy('id','desc')->first();
           $user_id = Auth::user()->id;

           //echo $user_id;
           //var_dump($prod_id);
           $prod_id = $prod->id;

           //DB::insert('insert into user_product(user_id, product_id) values ($user_id, $prod_id');
           DB::table('user_product')->insert([
              'user_id' => $user_id, 'product_id' => $prod_id]);

        }

       return View('display', ['product' => $product]);
    }

    public function showprofile()
    {

        if (Auth::check()) 
        {
          // The user is logged in...

          $user = DB::table('products')->where('email', Auth::user()->email)->get();
        
          return view('profile',['user' => $user]);
        
        }
        else
        {
          return view('auth.login');
        }
    }

    public function searchproduct(Request $request)
    {

      $search = Input::get('search');
      //$search = $request->search;
      echo $search;
      if(empty($search)){
          return redirect('/')->with('message','Ingresa una palabra en tu busqueda');
      }
      $products = Products::where('title', 'LIKE','%'.$search.'%')->paginate(4);


      return view('results',['products' => $products]);

    }
}