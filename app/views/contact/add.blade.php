@extends('layout.master')



@section('content')


    <div class="box col-md-8">
        {{Form::open()}}

        <h1>Add New Contact</h1>
        <hr />

        @include('layout.alerts')




        <div class="form-group">

            {{Form::label('title', 'Title')}}

            {{Form::select('title', Ring::titles(), null, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            {{Form::label('firstname', 'First Name')}}
            {{Form::text('firstname', null, ['class'=>'form-control', 'placeholder'=>'Enter First Name'])}}
        </div>


        <div class="form-group">
            {{Form::label('lastname', 'last Name')}}
            {{Form::text('lastname', null, ['class'=>'form-control', 'placeholder'=>'Enter Last Name'])}}
        </div>


        <div class="form-group">
            {{Form::label('middlename', 'Middle Name')}}
            {{Form::text('middlename', null, ['class'=>'form-control', 'placeholder'=>'Enter Middle Name'])}}
        </div>


        <div class="form-group">
            {{Form::label('occupation', 'occupation')}}
            {{Form::text('occupation', null, ['class'=>'form-control', 'placeholder'=>'Enter Contact Occupation'])}}
        </div>



        <div class="form-group">
            {{Form::label('businessname', 'Business Name')}}
            {{Form::text('businessname', null, ['class'=>'form-control', 'placeholder'=>'Enter Contact Business Name'])}}
        </div>



        <div class="form-group">

            {{Form::label('contacttype_id', 'Countact Type')}}

            {{Form::select('contacttype_id', $ct, null, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>


        {{Form::close()}}
    </div>





@stop