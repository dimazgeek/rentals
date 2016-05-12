@extends('layout.master')

@section('title')
    
@stop

@section('content')
    
    <div class='center'>
    <h1>Add a new Car</h1>
    <p><a href='/'><i class='fa fa-trash'></i>back</a></p>
   
    <form method='POST' action='/car/create'>

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
           <label>type</label>
           <input
               type='text'
               id='type'
               name='type'
               value='{{ old('type') }}'
           >
           
        </div>

        <div class='form-group'>
           <label>Brand:</label>
           <input
               type='text'
               id='brand'
               name='brand'
               value='{{ old('brand') }}'
           >
           
        </div>
            
            <div class='form-group'>
           <label>years:</label>
           <input
               type='text'
               id='years'
               name='years'
               value='{{ old('years') }}'
           >
           
        </div>
            
            <div class='form-group'>
           <label>Color:</label>
           <input
               type='text'
               id='color'
               name='color'
               value='{{ old('color') }}'
           >
           
        </div>
            
            <div class='form-group'>
           <label>id renter:</label>
           <input
               type='text'
               id='renter_id'
               name='renter_id'
               value='{{ old('renter_id') }}'
           >
           
        </div>


        <button type="submit" class="btn btn-primary">Add Car</button>

    </form>
</div>        
@stop