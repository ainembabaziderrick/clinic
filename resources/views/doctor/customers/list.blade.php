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
                                <th scope="col">History</th>
                                <th scope="col">Observations</th>
                                <th scope="col">Emergency</th>
                                <th scope="col">Emergency Treatment</th>
                                <th scope="col">Investigation</th>
                                <th scope="col">Impresion</th>
                                <th scope="col">Prescription</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Next</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->history}}</td>
                                <td>{{$value->observation}}</td>
                                
                                <td>{{$value->emergency}}</td>
                                <td>{{$value->emergency_treatment}}</td>
                                <td>{{$value->investigation}}</td>
                                <td>{{$value->impresion}}</td>
                                <td>{{$value->prescription}}</td>
                                
                                <td>{{ date('d-m-Y H:i:s',strtotime($value->created_at))}}</td>

                                <td>
                                        <div class="btn-group">
                                            <a href="{{url('doctor/customers/edit/'.$value->id)}}" class="btn btn-sm btn-primary">Continue</a>
                                            
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