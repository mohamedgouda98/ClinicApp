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
                        <form action="{{ route('admin.patient.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid fparsley-error parsley-error @enderror" value="{{old('name')}}" id="fullName" placeholder="Srinu" name="name" required>
                                            @error('name')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="patID">Phone</label>
                                            <input type="tel" class="form-control @error('phone') is-invalid fparsley-error parsley-error @enderror" value="{{old('phone')}}" id="patID" placeholder="Phone" name="phone" required>
                                            @error('phone')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="agE">Age</label>
                                            <input type="text" class="form-control @error('age') is-invalid fparsley-error parsley-error @enderror" value="{{old('age')}}" id="agE" placeholder="Age" name="age" required>
                                            @error('age')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="phoNe">Number Of Births</label>
                                            <input type="text" class="form-control @error('number_of_births') is-invalid fparsley-error parsley-error @enderror" value="{{old('number_of_births')}}" id="phoNe" placeholder="Number of births" name="number_of_births">
                                            @error('number_of_births')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Father Name</label>
                                            <input type="text" class="form-control @error('father_name') is-invalid fparsley-error parsley-error @enderror" value="{{old('father_name')}}" id="inputEmail" placeholder="mohamed" name="father_name" required>
                                            @error('father_name')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Father Age</label>
                                            <input type="number" class="form-control @error('father_age') is-invalid fparsley-error parsley-error @enderror" value="{{old('father_age')}}"  id="inputEmail" placeholder="mohamed" name="father_age" required>
                                            @error('father_age')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Father Job</label>
                                            <input type="text" class="form-control @error('father_job') is-invalid fparsley-error parsley-error @enderror" value="{{old('father_job')}}" id="inputEmail" placeholder="33" name="father_job" required>
                                            @error('father_job')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Mother Name</label>
                                            <input type="text" class="form-control @error('mother_name') is-invalid fparsley-error parsley-error @enderror" value="{{old('mother_name')}}" id="inputEmail" placeholder="maha" name="mother_name" required>
                                            @error('mother_name')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Mother Job</label>
                                            <input type="text" class="form-control @error('mother_job') is-invalid fparsley-error parsley-error @enderror" value="{{old('mother_job')}}" id="inputEmail" placeholder="mother's job" name="mother_job" required>
                                            @error('mother_age')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Mother Age</label>
                                            <input type="text" class="form-control @error('mother_age') is-invalid fparsley-error parsley-error @enderror" value="{{old('mother_age')}}" id="inputEmail" placeholder="33" name="mother_age">
                                            @error('mother_age')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Relation Type</label>
                                            <input type="text" class="form-control @error('relation_type') is-invalid fparsley-error parsley-error @enderror" value="{{old('relation_type')}}" id="inputEmail" placeholder="relation" name="relation_type" required>
                                            @error('relation_type')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Date</label>
                                            <input type="text" class="form-control @error('date') is-invalid fparsley-error parsley-error @enderror" value="{{old('date')}}" id="inputEmail" placeholder="date" name="date">
                                            @error('date')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="addreSs">Current Address</label>
                                            <textarea class="form-control @error('address') is-invalid fparsley-error parsley-error @enderror" id="addreSs" rows="3" placeholder="Current Address" name="address" required>{{old('address')}}</textarea>
                                            @error('address')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="biO">Patient History</label>
                                            <textarea class="form-control @error('note') is-invalid fparsley-error parsley-error @enderror" id="biO" rows="3" placeholder="Patient History" name="note">{{old('note')}}</textarea>
                                            @error('note')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            <button class="btn btn-primary">Create Booking</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

    </div>
@endsection
