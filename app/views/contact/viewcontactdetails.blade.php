@extends('layout.master')

@section('content')



<h1> Contact Details</h1>

<hr />

<div class="col-md-10">


    @include('layout.alerts')
    <table class="table table-bordered">

        <thead>
        <tr>
            <th colspan="2">First Name </th>
            <th colspan="2">Last Name </th>
            <th colspan="2">Middle Name</th>

        </tr>
        </thead>

        <tr>
            <td colspan="2"> {{$contact->firstname}}</td>
            <td colspan="2"> {{$contact->lastname}}</td>
            <td colspan="2">{{$contact->middlename}}</td>
        </tr>


        <tr>
            <td colspan="6"> </td>
        </tr>


        <tr>
            <th colspan="2">Account Type</th>
            <th colspan="2">Occupation </th>
            <th colspan="2">Business Name</th>

        </tr>


        <tr>
            <td colspan="2"> {{$contact->contacttype->contact_type}}</td>
            <td colspan="2"> {{$contact->lastname}}</td>
            <td colspan="2">{{$contact->middlename}}</td>
        </tr>


        <tr>
            <th colspan="6">  <h4>Contact Addresses   <a href="{{URL::to("addcontactaddresstocontact/$contact->id")}}" class="btn btn-success pull-right"> Add New Address</a></h4>

            </th>
        </tr>



        @foreach($contact->addresses as $ad)

            <tr>

                <td colspan="6">

                    <strong><u>{{$ad->addresstype->address_type}}</u></strong>
                   <p>
                       <em>
                           {{$ad->houseno}} {{$ad->street}}
                           <br />{{$ad->city}} {{$ad->state}}
                           <br />
                           {{$ad->countrie->full_name}}

                       </em>

                   </p>
                    <a href="{{URL::to("editcontactaddress/$ad->id/$contact->id")}}" class="bg-info"> Edit</a>
                    <a href="{{URL::to("deletecontactaddress/$ad->id/$contact->id")}}" class="bg-danger"> Delete</a>
                </td>

            </tr>


            @endforeach


            <tr>
                <td colspan="6">

                </td>
            </tr>

        <tr>
            <th colspan="6"> <h4>Phone Numbers <a href="{{URL::to("addnewcontactphonenumber/$contact->id")}}" class="btn btn-success pull-right"> Add New Phone Number</a></h4>


            </th>

        </tr>

        @foreach($contact->phones as $phone)
            <tr>
                <td colspan="6">
                    <p>
                        <Strong class="">{{$phone->phonenumbertype->phone_type}} : </Strong> {{$phone->number}}
                    </p>
                    <a href="{{URL::to("editcontactphonenumber/$phone->id/$contact->id")}}" class="bg-info"> Edit</a>
                    <a href="{{URL::to("deletecontactphonenumber/$phone->id/$contact->id")}}" class="bg-danger"> Delete</a>

                </td>
            </tr>
        @endforeach



        <tr>
            <th colspan="6"> <h4>Email Addresses <a href="{{URL::to("addnewcontactemailladdress/$contact->id")}}" class="btn btn-success pull-right"> Add New Email Address</a></h4>

            </th>
        </tr>

        @foreach($contact->emails as $email)
                <tr>
                    <td colspan="6">


                       <p>  <strong>{{$email->emailtype->email_type}}: </strong>  {{$email->emaiaddress}}</p>

                        <a href="{{URL::to("editnewcontactemailaddreess/$email->id/$contact->id")}}" class="bg-info"> Edit</a>
                        <a href="{{URL::to("deletenewcontactemailaddress/$email->id/$contact->id")}}" class="bg-danger"> Delete</a>
                    </td>



                </tr>

         @endforeach


        <tr>
            <th colspan="6"> <h4>Urls / Websites <a href="{{URL::to("addnewcontactwebsiteurl/$contact->id")}}" class="btn btn-success pull-right"> Add New Url</a></h4>  </th>
        </tr>


        @foreach($contact->websites as $url)

                <tr>

                    <td colspan="6">

                        <p>

                            <a href="{{$url->websiteaddress}}">{{$url->websitetype->website_type}}</a>  / ({{$url->websiteaddress}})
                        </p>
                        <a href="{{URL::to("editcontactwebsiteurl/$url->id/$contact->id")}}" class="bg-info"> Edit</a>
                        <a href="{{URL::to("deletecontactwebsiteurl/$url->id/$contact->id")}}" class="bg-danger"> Delete</a>

                    </td>
                </tr>
            @endforeach
    </table>



</div>



@stop
