@extends('layout.master')

@section('title')
   
@stop

@section('content')
   <div class="center">
    <p><a href='/car/ava'><i class='fa fa-trash'></i>back</a></p>
                         
        <p>input your id:</p>
  <table class="table table-striped">
     <thead>
      <tr>
        <th>ID</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td>{{$order->provider}}</td>
        <td><a href='/car/edit/{{$order->id}}'>pick</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
        
    
@stop