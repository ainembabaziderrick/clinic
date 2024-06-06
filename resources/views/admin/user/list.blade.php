@extends('admin.layouts.app')

 @section('content')
<div class="pagetitle">
    <h1>Users List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ url('admin/user/add')}}" class="btn btn-primary">Add New User</a>
                     </h5>

                                        
                </div>
            </div>
        </div>
    </div>
</section>






 @endsection