@extends('layout.master')



@section('content')


    <div class="box col-md-8">
        {{Form::model($phone, array($phone->id))}}

        <h1>Edit Phone Number</h1>
        <hr />

        @include('layout.alerts')




        <div class="form-group">

            {{Form::label('phonenumbertype_id', 'Phone Number Type')}}

            {{Form::select('phonenumbertype_id', $ph, $phone->phonenumbertype_id, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            {{Form::label('number', 'Number')}}
            {{Form::text('number', $phone->number, ['class'=>'form-control', 'placeholder'=>'Number'])}}
        </div>






        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>


        {{Form::close()}}
    </div>





@stop