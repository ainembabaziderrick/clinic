@extends('admin.layouts.app')

 @section('content')
 <div class="pagetitle">
    <h1>Add Customers</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Customer</h5>

                    <form action=" {{ url('admin/customers/update/'.$customers->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required value="{{ $customers->name}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Contact Number<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="number" name="contact_number" class="form-control" required value="{{ $customers->contact_number}}" > 
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Address<span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                               <textarea name="address" id="" cols="30" rows="3" class="form-control">{{ $customers->address}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Doctor Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="doctor_name" class="form-control" required value="{{ $customers->doctor_name}} ">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Doctor Address<span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                               <textarea name="doctor_address" id="" cols="30" rows="3" class="form-control">{{ $customers->doctor_address}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label"> 
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>






 @endsection