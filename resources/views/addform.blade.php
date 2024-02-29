@extends('auth.layouts')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Add/Remove Multiple Input Fields Example</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .container {
            max-width: 600px;
        }
     
    </style>
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <form action="{{ url('addproducts') }}" method="POST" enctype="multipart/form-data">
            @csrf

           
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name"  name="name">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description" name="desc">
  </div>
  @error('desc')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price">
  </div>
  @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

  <div class="form-group">
    <label for="exampleInputEmail1">stock quantity</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter stock qty" name="qty">
  </div>
  @error('qty')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror




         
            <button  type="submit" style="margin-top: 30px;"  id="cf-form" class="btn btn-outline-success btn-block">Submit</button>
        </form>
    </div>
</body>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>



   
    


    


</html>
    
@endsection