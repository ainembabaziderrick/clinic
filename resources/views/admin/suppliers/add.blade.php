@extends('admin.layouts.app')

 @section('content')
<div class="pagetitle">
    <h1>Supplier List</h1>
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

                     <form action=" {{ url('admin/suppliers/add')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Supplier Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="supplier_name" class="form-control" required>                              
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Supplier Email<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="email" name="supplier_email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Address<span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" required>
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