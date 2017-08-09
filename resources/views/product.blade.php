@extends('layouts.app')

@section('content')
@endsection
<head>
	<link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
</head>
<div class="container">
    		{{ $product->title }}<br/>
    		{{ $product->price }}<br/>
    		{{ $product->description }}<br/>
    		{{ $product->location }}<br/>
    		<img alt="star" src="{{ asset('uploads/' . $product->image) }}" class="img-responsive" /></td>
		    	
			
</div>
	<div>
        <form method="post" action="{{ URL::to('messages')}}" enctype="multipart/form-data">
        	
        	<input type="text" name="senderemail" value="Email">
    	  	<textarea rows="4" cols="40" name="msg" id="msg">
    	  		Escribe tu mensaje aqui...
    	  	</textarea>
			{!! captcha_image_html('ExampleCaptcha') !!}
			<input type="text" id="CaptchaCode" name="CaptchaCode">
			<br/>
    	  	 <input type="submit" value="Send" name="submit">
      		 <input type="hidden" value="{{ csrf_token() }}" name="_token">
      	</form>

      	{{ Counter::showAndCount($product->title) }}
    </div>

 


