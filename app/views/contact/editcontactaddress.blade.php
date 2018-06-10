@extends('layout.master')



@section('content')


    <div class="box col-md-8">
        {{Form::model([$address, $address->id])}}

        <h1>Edit  Contact Address</h1>
        <hr />

        @include('layout.alerts')




        <div class="form-group">

            {{Form::label('addresstype_id', 'Address Type')}}

            {{Form::select('addresstype_id', $ad, $address->addresstype_id, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            {{Form::label('houseno', 'House No')}}
            {{Form::text('houseno', $address->houseno, ['class'=>'form-control', 'placeholder'=>'House No'])}}
        </div>


        <div class="form-group">
            {{Form::label('street', 'Name of Street')}}
            {{Form::text('street', $address->street, ['class'=>'form-control', 'placeholder'=>'Street Name'])}}
        </div>


        <div class="form-group">
            {{Form::label('city', 'City')}}
            {{Form::text('city', $address->city, ['class'=>'form-control', 'placeholder'=>'City'])}}
        </div>


        <div class="form-group">
            {{Form::label('state', 'State/Province')}}
            {{Form::text('state', $address->state, ['class'=>'form-control', 'placeholder'=>'State'])}}
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