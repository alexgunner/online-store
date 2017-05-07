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
                 </li>  
		@endforeach
	</ul>
</div>
	{{ $products->appends(['title' => Request::input('title')])->links() }}
 
</body>
</html>
