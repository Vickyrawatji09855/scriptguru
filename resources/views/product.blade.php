@extends('auth.layouts')

@section('content')



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product!</title>
  </head>
  <body>
   
  <table class="table"  style="margin-top:15px">
 
  <tbody>
    <tr>
      <th scope="row">ID</th>
      <td>{{$product->id}}</td>
      
    </tr>
    <tr>
      <th scope="row">Name</th>
      <td>{{$product->name}}</td>
      
    </tr>
    <tr>
      <th scope="row">Description</th>
      <td>{{$product->description}}</td>
      
    </tr>
    <tr>
      <th scope="row">Price</th>
      <td>{{$product->price}}</td>
    </tr>
    <tr>
      <th scope="row">Stock Quantity</th>
      <td>{{$product->stock_quantity}}</td>
    </tr>
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

@endsection