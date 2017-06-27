@extends('layouts.app')

@section('content')

<div>
<div class="container">
    		{{ $product->title }}<br/>
    		{{ $product->price }}<br/>
    		{{ $product->description }}<br/>
    		{{ $product->location }}<br/>
    		<img alt="star" src="{{ asset('uploads/' . $product->image) }}" class="img-responsive" /></td>
		    	
			
</div>
 
 @section('footer')
 @endsection
<div>
 @endsection

