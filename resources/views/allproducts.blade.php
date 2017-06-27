<!DOCTYPE html>
<html lang="en">
<head>
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
	<!--//fonts-->
</head>
<body>
  <nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Panel de administración</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="/listprod">Productos</a></li>
	      <li><a href="#">Mensajes</a></li>
	      <li><a href="#">Usuarios</a></li>
	    </ul>
	  </div>
	</nav>
 @foreach ($products as $product)
		    	
		    		<td>{{ $product->title }}</td><br/>
		    		<td>Bs. {{ $product->price }}</td><br/>
		    		<td>{{ $product->description }}</td><br/>
		    		<td>{{ $product->location }}</td><br/>
		    		<td><img alt="star" src="{{ asset('uploads/' . $product->image) }}" class="img-responsive" /></td>
		    	
			@endforeach
<a href="{{ route('product', $product->id) }}">Ver Producto</a>
	{{ $products->links() }}
</div>
</body>
</html>