@extends('layout.master')

@section('title')
    
@stop

@section('content')
    <div class="center">
    <h1> Welcome to rental app</h1>
    <p><a href='/member/create'><i class='fa fa-trash'></i> create member</a></p>
    <p><a href='/car/create'><i class='fa fa-trash'></i> add car</a></p>
    <p><a href='/car/ava'><i class='fa fa-trash'></i> pickup car</a></p>
                         
        <p>car avalaible:</p>
  <table class="table table-striped">
     <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Year</th>
        <th>Phone</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>
      @foreach($cars as $car)
    <tr>
        <td>{{$car->name}}</td>
        <td>{{$car->type}}</td>
        <td>{{$car->years}}</td>
        <td>{{$car->renter->phone}}</td>
        <td><a href='/{{$car->id}}'><i class='fa fa-trash'></i> Delete</a></td>
    </tr>
      @endforeach
    </tbody>
  </table>

</div>
    
@stop