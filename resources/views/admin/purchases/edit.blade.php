@extends('admin.layouts.app')

 @section('content')
 <div class="pagetitle">
    <h1>Edit Purchases</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Purchases</h5>

                    <form action=" {{ url('admin/purchases/update/'.$getRecord->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Supplier Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <select name="suppliers_id" id="" class="form-control">
                                    <option value="">Select Supplier's Name</option>
                                    @foreach($getSupplier as $value)
                                    <option {{ ($value->id == $getRecord->suppliers_id) ? 'selected' : ''}} value="{{ $value->id}}">{{ $value->supplier_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Invoices ID <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <select name="invoices_id" id="" class="form-control">
                                    <option value="">Select Invoice's Number</option>
                                    @foreach($getInvoice as $value)
                                    <option {{ ($value->id == $getRecord->invoices_id) ? 'selected' : ''}} value="{{ $value->id}}">{{ $value->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Voucher Number<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="voucher_number" class="form-control" required value="{{ $getRecord->voucher_number}}">
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Purchase Date <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="date" name="purchase_date" class="form-control" required value="{{ $getRecord->purchase_date}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Total Amount<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="total_amount" class="form-control" required value="{{ $getRecord->total_amount}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Payment Status<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <select name="payment_status" id="" class="form-control">
                                    <option {{ ($getRecord->payment_status == '1') ? 'selected' : ''}} value="1">Pending</option>
                                    <option {{ ($getRecord->payment_status == '2') ? 'selected' : ''}} value="2">Accepted</option>
                                    <option {{ ($getRecord->payment_status == '3') ? 'selected' : ''}} value="3">Cancelled</option>
                                </select>
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