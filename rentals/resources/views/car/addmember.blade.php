@extends('layout.master')

@section('title')
    
@stop

@section('content')
    <div class='center'>
    <h1>add new member</h1>
    <p><a href='/'><i class='fa fa-trash'></i>back</a></p>
   <form method='POST' action='/member/create'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>name</label>
           <input
               type='text'
               id='name'
               name='name'
               value='{{ old('name') }}'
           >
           
        </div>

        <div class='form-group'>
           <label>phone</label>
           <input
               type='text'
               id='phone'
               name='phone'
               value='{{ old('phone') }}'
           >
           
        </div>

        <div class='form-group'>
           <label>Address:</label>
           <input
               type='text'
               id='address'
               name='address'
               value='{{ old('address') }}'
           >
           
        </div>
        <button type="submit" class="btn btn-primary">Add book</button>

    </form>
</div>        
@stop