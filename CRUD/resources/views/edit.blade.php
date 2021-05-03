@extends('master')

@section('content')
    


<div>
  
    <form action="/up" method="POST" >
        @csrf
        <div class="mb-3">
          <input type="hidden" class="form-control" value="{{$product->id}}"  id="id" name="id" >
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" value="{{$product->name}}"  id="name" name="name" >
         
        </div>
        <div class="mb-3">
          <label for="qty" class="form-label">qty</label>
          <input type="text" class="form-control" value="{{$product->qty}}" id="qty" name="qty">
        </div>
       
        <button type="submit" class="btn btn-primary">Add Product</button>
      </form>


</div>

@endsection