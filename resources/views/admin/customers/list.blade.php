@extends('admin.layouts.app')

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
                    <a href="{{ url('admin/customers/add')}}" class="btn btn-primary">Add New Customer</a>
                     </h5>
                     <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Doctor Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                                <td>Derrick</td>
                                <td>0703996251</td>
                                <td>USA</td>
                                <td>Ronald</td>
                                <td>Bikurungu</td>
                                <td></td>
                                
                            </tr>
                        </tbody>

                     </table>
                </div>
            </div>
        </div>
    </div>
</section>






 @endsection