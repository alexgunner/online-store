 <html>
<head>
  <title>Busqueda</title>
</head>
<body>
<div class="container">
	<ul> 
 		@foreach ($products as $prod)
 				<li>
                    {{ $prod->title }}
                    {{  $prod->id}}
                    <img alt="star" src="{{ asset('uploads/' . $prod->image) }}" />
                    <a href="{{ route('product', $prod->id) }}">Ver Producto</a>
                 </li>  
		@endforeach
	</ul>
</div>
	{{ $products->appends(['title' => Request::input('title')])->links() }}
 
</body>
</html>
