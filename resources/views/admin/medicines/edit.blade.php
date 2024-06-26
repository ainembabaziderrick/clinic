@extends('admin.layouts.app')

 @section('content')
 <div class="pagetitle">
    <h1>Add Medicines</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Medicine</h5>
                    <form action=" {{ url('admin/medicines/update/'.$medicines->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Medicine Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required value="{{ $medicines->name}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Packing<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="packing" class="form-control" required value="{{ $medicines->packing}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Generic Name<span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="generic_name" class="form-control" required value="{{ $medicines->generic_name}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Supplier Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="supplier_name" class="form-control" required value="{{ $medicines->supplier_name}}">
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