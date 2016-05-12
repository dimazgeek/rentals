@extends('layout.master')

@section('title')
    
@stop

@section('content')
   <div class="center">                      
        <p>car avalaible:</p>
  <table class="table table-striped">
     <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Year</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td>{{$order->name}}</td>
        <td>{{$order->type}}</td>
        <td>{{$order->years}}</td>
        <td>{{$order->price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
        
    
@stop