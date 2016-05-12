@extends('layout.master')

@section('title')
    
@stop

@section('content')
<div class="center">
     <h1>Car Avalaible</h1>
     <p><a href='/'><i class='fa fa-trash'></i>back</a></p>                     
        <p>car avalaible:</p>
  <table class="table table-striped">
     <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Year</th>
        <th>Price</th>
        <th>ID Provider</th>
      </tr>
    </thead>
    <tbody>
      @foreach($avas as $ava)
      <tr>
        <td>{{$ava->name}}</td>
        <td>{{$ava->type}}</td>
        <td>{{$ava->years}}</td>
        <td>{{$ava->price}}</td>
        <td>{{$ava->provider}}</td>
        <td><a href='/car/pickup/'>pick</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
        
    
@stop