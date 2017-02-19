<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Input as Input;
use App\Messages;

class MessagesController extends Controller
{

    


    public function show()
    {

      return view();

    }

    public function store(Request $request)
    {

    	 $message = Messages::create([
                'message' => $request->msg,
          ]);

    	 return View('messages', ['message' => $message]);
    }
}