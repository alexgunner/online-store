<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Input as Input;
use App\Messages;
use Mail;

class MessagesController extends Controller
{

    


    public function show()
    {

      return view();

    }

    public function store(Request $request)
    {

    	//$user = session('email');

    	 $message = Messages::create([
                'message' => $request->msg,
          ]);

    	 $data = array(
    	 		'msg' => $request->msg ,
    	 		'email' => $request->senderemail, 
    	 		);
    	 Mail::send('emails.contactmsg', $data, function($message1) use ($data){

    	 		$message1->from($data['email']);
    	 		$message1->to(' yuri-12b232@inbox.mailtrap.io');
    	 		$message1->subject('buy product');
    	 });

    	 return View('messages', ['message' => $message]);

    }
}