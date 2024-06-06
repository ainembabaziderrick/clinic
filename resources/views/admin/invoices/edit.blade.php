@extends('admin.layouts.app')

 @section('content')
 <div class="pagetitle">
    <h1>Add Invoices</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Invoices</h5>
                    <form action=" {{ url('admin/invoices/update/'.$oldRecord->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Customer's Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <select name="customers_id" id="" class="form-control" required>
                                    <option value="">Select Customer's Name</option>
                                    @foreach($getRecord as $value)
                                    <option {{ ($value->id == $oldRecord->customers_id) ? 'selected' : '' }} value="{{ $value->id}}">{{ $value->name}}</option>
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Net Total<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="net_total" class="form-control" required value="{{ $oldRecord->net_total}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Invoices Date<span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                            <input type="date" name="invoices_date" class="form-control" required value="{{ $oldRecord->invoices_date}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Total Amount <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="total_amount" class="form-control" required value="{{ $oldRecord->total_amount}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Total Discount <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="total_discount" class="form-control" required value="{{ $oldRecord->total_discount}}">
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