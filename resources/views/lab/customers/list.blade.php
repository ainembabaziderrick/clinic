@extends('doctor.doctor_app')

 @section('content')
<div class="pagetitle">
    <h1>Office</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    
                     </h5>
                     <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Investigation</th>
                                <th scope="col">Results</th>
                                
                                <th scope="col">Created At</th>
                                <th scope="col">Next</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->investigation}}</td>
                                <td>{{$value->results}}</td>
                                
                                
                                
                                <td>{{ date('d-m-Y H:i:s',strtotime($value->created_at))}}</td>

                                <td>
                                        <div class="btn-group">
                                            <a href="{{url('lab/customers/edit/'.$value->id)}}" class="btn btn-sm btn-primary">Continue</a>
                                            
                                        </div>
                                    </td>
                                
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