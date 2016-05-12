@extends('layout.master')

@section('title')
    All Member
@stop

@section('content')
   <div class="center">
    <p><a href='/'><i class='fa fa-trash'></i>Home</a></p>
                         
        <p>list member:</p>
  <table class="table table-striped">
     <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>phone</th>
        <th>address</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($renters as $ava)
      <tr>
        <td>{{$ava->id}}</td>
        <td>{{$ava->name}}</td>
        <td>{{$ava->phone}}</td>
        <td>{{$ava->address}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
        
    
@stop