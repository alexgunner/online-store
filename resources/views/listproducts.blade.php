<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	@foreach ($products as $product)
		<p> {{ $product->name }}</p>
	  <p>
	        <img alt="star" src="{{ asset('uploads/' . $product->image) }}" />

	  </p>
	  <p> {{ $product->image }} </p>
  @endforeach
</div>
  {{ $products->links() }}
</body>
</html>