
@extends('doctor.doctor_app')

 @section('content')
  

    <div class="pagetitle">
      <h1>Doctor's Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">


                <div class="card-body">
                  <h5 class="card-title">Office </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <a href="{{ url('admin/customers')}}">
                    <div class="ps-3">
                      <h6>{{$TotalCustomers}}</h6>
                      
                    </div>
                    </a>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

         
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  @endsection
