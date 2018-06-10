@extends('layout.master')



@section('content')


    <div class="box col-md-8">
        {{Form::open()}}

        <h1>Add New Contact Address</h1>
        <hr />

        @include('layout.alerts')




        <div class="form-group">

            {{Form::label('addresstype_id', 'Address Type')}}

            {{Form::select('addresstype_id', $ad, null, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            {{Form::label('houseno', 'House No')}}
            {{Form::text('houseno', null, ['class'=>'form-control', 'placeholder'=>'House No'])}}
        </div>


        <div class="form-group">
            {{Form::label('street', 'Name of Street')}}
            {{Form::text('street', null, ['class'=>'form-control', 'placeholder'=>'Street Name'])}}
        </div>


        <div class="form-group">
            {{Form::label('city', 'City')}}
            {{Form::text('city', null, ['class'=>'form-control', 'placeholder'=>'City'])}}
        </div>


        <div class="form-group">
            {{Form::label('state', 'State/Province')}}
            {{Form::text('state', null, ['class'=>'form-control', 'placeholder'=>'State'])}}
        </div>



        <div class="form-group">

            {{Form::label('countrie_id', 'Country')}}

            {{Form::select('countrie_id', $ct, null, array('class'=>'form-control'))}}

        </div>



        {{--<div class="form-group">--}}

            {{--{{Form::label('contacttype_id', 'Countact Type')}}--}}

            {{--{{Form::select('contacttype_id', $ct, null, array('class'=>'form-control'))}}--}}

        {{--</div>--}}




        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>


        {{Form::close()}}
    </div>





@stop