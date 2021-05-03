@extends('master')

@section('content')
    


<div>
    <div>
        <h1> Product List</h1>
        <a href="/addproduct" class="btn btn-primary">Add Product</a>
    </div>
    <table class="table">
  <thead>
    <tr>
    
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">qty</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
      @foreach ($products as $item)
      <tr>  
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->qty}}</td>
        <td>
            <a href="{{url('/edit',$item->id)}}" 
                                   class="btn btn-secondary" >  
                                                    <span>Edit </span>
                                                 </a>
            {{-- <a href="/edit" class="btn btn-primary" >Edit</a> --}}
            <a class="btn btn-danger" href="{{url('/delete',$item->id)}}" >Delete</a>
        </td>
    </tr>
      @endforeach
      
    
  </tbody>
</table>

</div>

@endsection