
<html>
<head>
  <title>Nuevo Producto</title>
</head>
<body>



<form method="post" action="{{ URL::to('products')}}" enctype="multipart/form-data">
  <label>Nombre:</label>
  <input id="getname" type="text" name="name">
  <br/>
  <label>Email:</label>
  <input id="email" type="email" name="email">
  <br/>
  <label>Titulo:</label>
  <input id="title" type="text" name="title">
  <br/>
  <label>Vendido Por:</label>
  <input id="saleby" type="text" name="saleby">
  <br/>
  <label>Precio:</label>
  <input id="getname" type="text" name="price">
  <br/>
  <label>Descripcion:</label>
  <input id="description" type="text" name="description">
  <br/>
  <label>Lugar:</label>
  <input id="location" type="text" name="location">
  <br/>
  <label >Imagen:</label>
   <input type="file" name="file" id="file">
   <br/>
  <input type="submit" value="Save" name="submit">
  <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>

</body>
</html>