@extends('master')

@section('content')
    


<div class="container">

    <a  href="/products" class="btn btn-secondary">List All Products</a>

    @include('helper.error')
    <form action="/add" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" >
         
        </div>
        <div class="mb-3">
          <label for="qty" class="form-label">qty</label>
          <input type="text" class="form-control" id="qty" name="qty">
        </div>
       
        <button type="submit" class="btn btn-primary">Add Product</button>
      </form>

</div>

@endsection