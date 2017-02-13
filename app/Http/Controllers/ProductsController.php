<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Input as Input;
use App\Products;

class ProductsController extends Controller
{

    public function showlist()
    {

        $products = DB::table('profile')->paginate(1);


        return view('listproducts',['products' => $products]);
    }


    public function show()
    {

      return view('products');
    }
    public function store(Request $request)
    {
        //echo "UPLOADED";
       if(Input::hasFile('file')){
          $file = Input::file('file');
          $file->move('uploads', $file->getClientOriginalName());

          //$destinationPath = public_path(). '/uploads/';
          //$filename = public_path() . '\uploads\\' . $file->getClientOriginalName();
          $filename = $file->getClientOriginalName();
          //$file->move($destinationPath, $filename);

          //echo  $filename;
           //echo '<img src="uploads/'. $filename . '"/>';

           $product = Products::create([
                'name' => $request->name,
                'email' => $request->email,
                'title' => $request->title,
                'saleby' => $request->saleby,
                'price' => $request->price,
                'description' => $request->description,
                'Location' => $request->location,
               'image' => $filename,
           ]);

       }

       return View('display', ['product' => $product]);
    }
}