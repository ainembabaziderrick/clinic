@extends('receptionist.receptionist_app')


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

                    <form action=" {{ url('receptionist/customers/add')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                       
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Attendant Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="attendant" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Cleint Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Contact Number<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="number" name="contact_number" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Address<span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                               <textarea name="address" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">NOK Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="nok_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">NOK Contact <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="nok_contact" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">NOK Address<span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                               <textarea name="nok_address" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Arrival Time <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="time" name="time" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Arrival Date <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="date" name="date" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Reason of Visit<span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                               <textarea name="reason" id="" cols="30" rows="3" class="form-control"></textarea>
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