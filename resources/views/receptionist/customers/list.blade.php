@extends('receptionist.receptionist_app')

 @section('content')
<div class="pagetitle">
    <h1>Customers List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ url('receptionist/customers/add')}}" class="btn btn-primary">Add New Customer</a>
                     </h5>
                     <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">NOK Name</th>
                                <th scope="col">NOK Contact</th>
                                <th scope="col">NOK Address</th>
                                <th scope="col">Arrival Time</th>
                                <th scope="col">Arrival Date</th>
                                <th scope="col">Reason of Visit</th>
                                <th scope="col">Created At</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->contact_number}}</td>
                                <td>{{$value->address}}</td>
                                
                                <td>{{$value->nok_name}}</td>
                                <td>{{$value->nok_contact}}</td>
                                <td>{{$value->nok_address}}</td>
                                <td>{{$value->time}}</td>
                                <td>{{$value->date}}</td>
                                <td>{{$value->reason}}</td>
                                <td>{{ date('d-m-Y H:i:s',strtotime($value->created_at))}}</td>

                               
                                
                            </tr>
                            @endforeach
                        </tbody>

                     </table>
                </div>
            </div>
        </div>
    </div>
</section>






 @endsection