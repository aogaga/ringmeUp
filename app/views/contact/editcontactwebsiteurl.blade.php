@extends('layout.master')



@section('content')


    <div class="box col-md-8">
        {{Form::model([$website, $website->id])}}

        <h1>Edit URL / Website</h1>
        <hr />

        @include('layout.alerts')




        <div class="form-group">

            {{Form::label('websitetype_id', 'URL/ Website Type')}}

            {{Form::select('websitetype_id', $wp, $website->websitetype_id, array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            {{Form::label('websiteaddress', 'Website/ URL')}}
            {{Form::text('websiteaddress', $website->websiteaddress, ['class'=>'form-control', 'placeholder'=>'website'])}}
        </div>






        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>


        {{Form::close()}}
    </div>





@stop