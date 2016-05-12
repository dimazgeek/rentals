@extends('layout.master')

@section('title')
    
@stop

@section('content')
    <div class="center">
    <h1>Edit book </h1>
    
     <p><a href='/car/ava'><i class='fa fa-trash'></i>back</a></p>
    


    <form method='POST' action='/car/save'>

        <input type='hidden' name='id' value='{{$order->id}}'>

        {{ csrf_field() }}


        <div class='form-group'>
           <label>ID User</label>
           <input
               type='text'
               id='user'
               name='user'
               value='{{ $order->user }}'
           >
        </div>    
        <button type="submit" class="btn btn-primary">Save changes</button>

    </form>

</div>
@stop