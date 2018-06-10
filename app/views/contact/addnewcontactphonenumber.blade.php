@extends('layout.master')



@section('content')


    <div class="box col-md-8">
        {{Form::open()}}

        <h1>Add New Phone Number</h1>
        <hr />

        @include('layout.alerts')




        <div class="form-group">

            {{Form::label('phonenumbertype_id', 'Phone Number Type')}}

            {{Form::select('phonenumbertype_id', $ph, null, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            {{Form::label('number', 'Number')}}
            {{Form::text('number', null, ['class'=>'form-control', 'placeholder'=>'Number'])}}
        </div>






        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>


        {{Form::close()}}
    </div>





@stop