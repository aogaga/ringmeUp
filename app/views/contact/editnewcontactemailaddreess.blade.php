@extends('layout.master')



@section('content')


    <div class="box col-md-8">
        {{Form::model([$email, $email->id])}}

        <h1>Edit Email Addressq1 </h1>
        <hr />

        @include('layout.alerts')




        <div class="form-group">

            {{Form::label('emailtype_id', 'Email Type /Kind')}}

            {{Form::select('emailtype_id', $em, $email->emailtype_id , array('class'=>'form-control'))}}

        </div>




        <div class="form-group">
            {{Form::label('emaiaddress', 'Email Address')}}
            {{Form::text('emaiaddress', $email->emaiaddress, ['class'=>'form-control', 'placeholder'=>'Number'])}}
        </div>






        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>


        {{Form::close()}}
    </div>





@stop