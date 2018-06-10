@extends('layout.master')



@section('content')


    <div class="box col-md-8">
        {{Form::model([$contact, $contact->id])}}

        <h1>Edit Contact</h1>
        <hr />

        @include('layout.alerts')




        <div class="form-group">

            {{Form::label('title', 'Title')}}

            {{Form::select('title', Ring::titles(), $contact->title, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            {{Form::label('firstname', 'First Name')}}
            {{Form::text('firstname', $contact->firstname, ['class'=>'form-control', 'placeholder'=>'Enter First Name'])}}
        </div>


        <div class="form-group">
            {{Form::label('lastname', 'last Name')}}
            {{Form::text('lastname', $contact->lastname, ['class'=>'form-control', 'placeholder'=>'Enter Last Name'])}}
        </div>


        <div class="form-group">
            {{Form::label('middlename', 'Middle Name')}}
            {{Form::text('middlename', $contact->middlename, ['class'=>'form-control', 'placeholder'=>'Enter Middle Name'])}}
        </div>


        <div class="form-group">
            {{Form::label('occupation', 'occupation')}}
            {{Form::text('occupation', $contact->occupation, ['class'=>'form-control', 'placeholder'=>'Enter Contact Occupation'])}}
        </div>



        <div class="form-group">
            {{Form::label('businessname', 'Business Name')}}
            {{Form::text('businessname', $contact->businessname, ['class'=>'form-control', 'placeholder'=>'Enter Contact Business Name'])}}
        </div>



        <div class="form-group">

            {{Form::label('contacttype_id', 'Countact Type')}}

            {{Form::select('contacttype_id', $ct, $contact->contacttype_id, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>


        {{Form::close()}}
    </div>





@stop