@extends('admin.layouts.app')

 @section('content')
<div class="pagetitle">
    <h1>Users</h1>
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

                     <form action=" {{ url('admin/user/add')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" required>                              
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Email<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Password<span style="color: red;">*</span>
                            </label>
                            <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Role<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <select name="is_role" id="" class="form-control" required>
                                    <option value="1">Admin</option>
                                    <option value="2">Doctor</option>
                                    <option value="3">Receptionist</option>
                                    <option value="4">Lab Attendant</option>
                                    <option value="5">Cashier</option>
                                    <option value="6">Dispenser</option>
                                    <option value="7">Radiographer</option>
                                </select>
                               
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label"> 
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>

                   
                     
                </div>
            </div>
        </div>
    </div>
</section>






 @endsection