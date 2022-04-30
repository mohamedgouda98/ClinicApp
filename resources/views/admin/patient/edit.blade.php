@extends('admin.layout.master')

@section('title')
    Add Patient
@endsection

@section('content')
    <div class="main-container">


        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Patients</li>
                <li class="breadcrumb-item active">Add Patient Details</li>
            </ol>
            <div class="site-award">
                <img src="{{ asset('assetsAdmin/img/award.svg') }}" alt="Award"> Best Hospital
            </div>
        </div>
        <!-- Page header end -->


        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Patient Details</div>
                        </div>
                        <form action="{{ route('admin.patient.update',$patient) }}" method="post">
                          @iclude('admin.patient.form')
                        </form>
                    </div>
                </div>
            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

    </div>
@endsection