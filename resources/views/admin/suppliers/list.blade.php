@extends('admin.layouts.app')

 @section('content')
<div class="pagetitle">
    <h1>Suppliers List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ url('admin/suppliers/add')}}" class="btn btn-primary">Add New Supplier</a>
                     </h5>

                     <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Supplier Name</th>
                                <th scope="col">Supplier Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                                
                                <td>{{$value->supplier_name}}</td>
                                <td>{{$value->supplier_email}}</td>
                                <td>{{$value->address}}</td>
                                        
                                <td>{{ date('d-m-Y H:i:s',strtotime($value->created_at))}}</td>

                                <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/suppliers/edit/'.$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{url('admin/suppliers/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a>
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