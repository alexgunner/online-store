@extends('layouts.app')

@section('content')
<form method="post" action="{{ URL::to('products')}}" enctype="multipart/form-data">
  
  <!-- <label>Nombre:</label>
  <input id="getname" type="text" name="name">
  <br/>
  <label>Email:</label>
  <input id="email" type="email" name="email">
  <br/> -->
  <label>Categoria</label>
  <select name="category" id="category">
    <option value="Autos">Volvo</option>
    <option value="Electronicos">Saab</option>
    <option value="Ropa">Fiat</option>
    <option value="Instrumentos Musicales">Audi</option>
  </select>

  <br/>

  <label>Titulo:</label>
  <input id="title" type="text" name="title">
  <br/>
  
  <label>Vendido Por:</label>
    <input type="radio" name="saleby" value="Dueno" checked> Dueno<br/>
    <input type="radio" name="saleby" value="Negocio"> Negocio<br/>
  <br/>
  <label>Precio:</label>
  <input id="getname" type="text" name="price">
  <br/>
  <label>Descripcion:</label>
  <input id="description" type="text" name="description">
  <br/>
  <label>Lugar:</label>
  <select name="location" id="location">
    <option value="la paz">La Paz</option>
    <option value="santa cruz">Santa Cruz</option>
    <option value="cochabamba">Cochabamba</option>
    <option value="sucre">Sucre</option>
  </select>
  <br/>

  <label >Imagen:</label>
   <input type="file" name="img" id="img">
   <br/>
   
  <input type="submit" value="Save" name="submit">
  <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>

<div class="form-group">
<div class="alert alert-error">
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>

        @endforeach
    </ul>
  
</div>
</div>
  @section('footer')
  @endsection

 @endsection

