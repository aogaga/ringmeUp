@extends('layout.master')



@section('content')


    <div class="box col-md-8">
        {{Form::open()}}

        <h1>Add New Email Address</h1>
        <hr />

        @include('layout.alerts')




        <div class="form-group">

            {{Form::label('emailtype_id', 'Email Type /Kind')}}

            {{Form::select('emailtype_id', $em, null, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            {{Form::label('emaiaddress', 'Email Address')}}
            {{Form::text('emaiaddress', null, ['class'=>'form-control', 'placeholder'=>'Number'])}}
        </div>






        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>


        {{Form::close()}}
    </div>





@stop