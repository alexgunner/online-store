<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \Input as Input;
use App\Products;

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
        
        $this->validate(request(), [
            'name' => 'required|max:40',
            'email' => 'required|max:40',
            'title' => 'required|max:50',
            'saleby' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'location' => 'required', 
            'file' => 'image'

        ]);

        //echo "UPLOADED";

       if(Input::hasFile('img')){
          echo 'asdasd';
          $file = Input::file('img');
          $file->move('uploads', $file->getClientOriginalName());

          //$destinationPath = public_path(). '/uploads/';
          //$filename = public_path() . '\uploads\\' . $file->getClientOriginalName();
          $filename = $file->getClientOriginalName();
          //$file->move($destinationPath, $filename);

          echo  $filename;
           //echo '<img src="uploads/'. $filename . '"/>';

           $product = Products::create([
                'name' => $request->name,
                'email' => $request->email,
                'title' => $request->title,
                'saleby' => $request->saleby,
                'price' => $request->price,
                'description' => $request->description,
                'location' => $request->location,
                'image' => $filename,
           ]);

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
}