@extends('admin.layouts.app')

 @section('content')
<div class="pagetitle">
    <h1>Purchases List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ url('admin/purchases/add')}}" class="btn btn-primary">Add New Purchase</a>
                     </h5>
                    
                     <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Supplier Name</th>
                                <th scope="col">Invoices ID</th>
                                <th scope="col">Voucher Number</th>
                                <th scope="col">Purchase Date </th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                                <td>{{ !empty($value->getSupplierName->supplier_name) ? $value->getSupplierName->supplier_name: '' }}</td>
                                <td>{{ !empty($value->getInvoiceID->id) ? $value->getInvoiceID->id: '' }}</td>
                                <td>{{$value->voucher_number}}</td>
                                <td>{{$value->purchase_date}}</td>
                                <td>{{$value->total_amount}}</td>
                                <td>@if($value->payment_status==1)
                                    Pending
                                    @elseif($value->payment_status==2)
                                    Accepted
                                    @elseif($value->payment_status==3)
                                    Cancelled
                                    @endif
                                </td>
        
                                <td>{{ date('d-m-Y H:i:s',strtotime($value->created_at))}}</td>

                                <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/purchases/edit/'.$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{url('admin/purchases/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a>
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