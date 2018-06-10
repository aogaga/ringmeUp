@extends('layout.master')

@section('content')

<div class="col-md-10">




    <?php $i = 0;?>

    <h1> Contact Register</h1>

    <hr />


    {{Form::open()}}

    <p>
    <div class="input-group">
        {{Form::text('qry', null, ['class'=>'form-control', 'placeholder'=>'Search by name, phone number, email or address', 'required'=>''])}}

        <span class="input-group-btn">
        <button class="btn btn-danger" type="submit">Search</button>
      </span>
    </div><!-- /input-group -->
    </p>
    {{Form::close()}}
        @include('layout.alerts')


    <p><strong>Search Results</strong></p>
    @if(!empty($contacts))

        <table class="table table-bordered">


            <thead class="">
            <tr>
                <th>#</th>
                <th> #ID</th>
                <th> Title</th>
                <th>Full Names </th>
                <th>Occupation</th>

                <th> Business name</th>

                <th>Contact Type</th>
                <th>View Details</th>
                <th>Edit</th>



            </tr>
            </thead>

            <tbody>
            @foreach ($contacts as $contact)

                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$contact->id}}</td>
                    <td>{{$contact->title}}</td>
                    <td> {{ucwords($contact->firstname)}}  {{ucwords($contact->lastame)}}  {{ucwords($contact->middlename)}}</td>
                    <td>{{$contact->occupation}}</td>


                    <td>{{$contact->businessname}}</td>

                    <td> {{$contact->contacttype->contact_type}}</td>
                    <td><a href="{{URL::to("viewContactDetails/$contact->id")}}">View details</a></td>
                    <td><a href="{{URL::to("editcontactperosnaldetails/$contact->id")}}">Edit</a></td>
                </tr>

            @endforeach
            </tbody>


        </table>


        {{$contacts->links()}}


    @else

        <h1> No record found</h1>

    @endif

</div>
@stop