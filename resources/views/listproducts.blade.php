<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">

	<div class="table-responsive">
	  <table class="table table-hover">
	    <thead>
	    	<tr>
	    		<th>Nombre</th>
	    		<th>Imagen</th>
	    		<th> </th>
	    	</tr>
	    </thead>
	    <tbody>
		    @foreach ($products as $product)
		    	<tr>
		    		<td>{{ $product->name }}</td>
		    		<td>{{ $product->image }}</td>
		    		<td><img alt="star" src="{{ asset('uploads/' . $product->image) }}" /></td>
		    	</tr>
			@endforeach
	    </tbody>
	  </table>
	</div>
	{{ $products->links() }}
</div>
</body>
</html>