@extends('admin.layouts.app')

 @section('content')
<div class="pagetitle">
    <h1>Invoices List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ url('admin/invoices/add')}}" class="btn btn-primary">Add New Invoice</a>
                     </h5>

                     <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Customer's Name</th>
                                <th scope="col">Net Total</th>
                                <th scope="col">Invoices Date</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Total Discount</th>
                                
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                                <td>{{ !empty($value->getCustomerName->name) ? $value->getCustomerName->name: '' }}</td>
                                <td>{{$value->net_total}}</td>
                                <td>{{$value->invoices_date}}</td>
                                <td>{{$value->total_amount}}</td>
                                <td>{{$value->total_discount}}</td>
                                
        
                                <td>{{ date('d-m-Y H:i:s',strtotime($value->created_at))}}</td>

                                <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/invoices/edit/'.$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{url('admin/invoices/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a>
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