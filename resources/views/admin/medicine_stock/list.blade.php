@extends('admin.layouts.app')

 @section('content')
<div class="pagetitle">
    <h1>Medicines Stock List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ url('admin/medicines_stock/add')}}" class="btn btn-primary">Add New Medicine Stock</a>
                     </h5>

                     <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Medicine Name</th>
                                <th scope="col">Batch ID</th>
                                <th scope="col">Expiry Date</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">MRP</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                                <td>{{ !empty($value->getMedicineName->name) ? $value->getMedicineName->name: '' }}</td>
                                <td>{{$value->batch_id}}</td>
                                <td>{{$value->expiry_date}}</td>
                                <td>{{$value->quantity}}</td>
                                <td>{{$value->mrp}}</td>
                                <td>{{$value->rate}}</td>
        
                                <td>{{ date('d-m-Y H:i:s',strtotime($value->created_at))}}</td>

                                <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/medicines_stock/edit/'.$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{url('admin/medicines_stock/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a>
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