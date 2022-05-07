@extends('admin.layout.master')

@section('title')
    Edit-Patient-Diagnoseis
@endsection

@section('content')
    <div class="main-container">


        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="{{ route('admin.diagnose.index') }}">Diagnosies</a> </li>
                <li class="breadcrumb-item active">Edit Patient Diagnosies </li>
            </ol>
            <div class="site-award">
                <img src="{{ asset('assetsAdmin/img/award.svg') }}" alt="Award"> Best Hospital
            </div>
        </div>
        <!-- Page header end -->


        <!-- Content wrapper start -->

				<!-- Content wrapper start -->
				<div class="content-wrapper">


<div class="row justify-content-center gutters">

    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="icon-users nav-icon"></i> Patient Details</div>
                </div>
                <div class="card-body">
                    <p><span class="text-capitalize text-info">Pateint Name: </span>{{ $diagnosis->patients->name }}</p>
                    <p><span class="text-capitalize text-info">Pateint Age: </span>{{ $diagnosis->patients->age }}</p>
                    <p><span class="text-capitalize text-info">Pateint Phone: </span>{{ $diagnosis->patients->phone }}</p>
                    <p><span class="text-capitalize text-info">Pateint Address: </span>{{ $diagnosis->patients->address }}</p>
                </div>
            </div>

        <form method="post" action="{{route('admin.diagnose.update',$diagnosis)}}" enctype="multipart/form-data">
            @method ('PUT')
            @csrf
            <input type="hidden" name="patient_id" value="{{ $diagnosis->patients->id }}">
            <div class="card m-0">
                <div class="card-header">
                    <div class="card-title">Diagnosis</div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> Complaint</label>
                                <input type="text" class="form-control" id="complaint" name="complaint" placeholder="complaint" value="{{$diagnosis->complaint}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> Diagnosis</label>
                                <input type="text" class="form-control" id="diagnosis" name="diagnosis" placeholder="diagnosis" value="{{$diagnosis->diagnosis}}">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO">Investigation</label>
                                <input type="text" class="form-control" id="investigation" name="investigation" placeholder="investigation" value="{{$diagnosis->investigation}}">
                            </div>
                        </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> Treamtent</label>
                                <input type="text" class="form-control" id="treamtent" name="treamtent" placeholder="treamtent" value="{{$diagnosis->treamtent}}">
                            </div>
                        </div>
                    </div>

                    <div class="row gutters">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> reseen</label>
                                <input type="text" class="form-control" id="reseen" name="reseen" placeholder="reseen" value="{{$diagnosis->reseen}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> hn</label>
                                <input type="text" class="form-control" id="hn" name="hn" placeholder="hn" value="{{$diagnosis->hn}}">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> phnx</label>
                                <input type="text" class="form-control" id="phnx" name="phnx" placeholder="phnx" value="{{$diagnosis->phnx}}">
                            </div>
                        </div>
                         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                            <label for="biO"> wt</label>
                                <input type="text" class="form-control" id="wt" name="wt" placeholder="wt" value="{{$diagnosis->wt}}">
                            </div>
                        </div>
                    </div>

                    <div class="row gutters">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                               <label for="biO"> tep</label>
                                <input type="text" class="form-control" id="tep" name="tep" placeholder="tep" value="{{$diagnosis->tep}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> hc</label>
                                <input type="text" class="form-control" id="hc" name="hc" placeholder="hc" value="{{$diagnosis->hc }}">
                            </div>
                        </div>
                    </div>



                    <div class="row gutters">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> Chest</label>
                                <input type="text" class="form-control" id="chest" name="chest" placeholder="chest" value="{{$diagnosis->chest}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> abd</label>
                                <input type="text" class="form-control" id="abd " name="abd" placeholder="abd" value="{{$diagnosis->abd}}">
                            </div>
                        </div>
                    </div>

                    <div class="row gutters">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO"> gentalia</label>
                                <input type="text" class="form-control" id="gentalia" name="gentalia" placeholder="gentalia" value="{{$diagnosis->gentalia}}">
                                @error('gentalia')
                                <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="biO">  Image </label>
                                <input type="file" class="form-control" id="diagnosis_img" name="diagnosis_img[]" multiple>
                                @error('diagnosis_img')
                                <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <div class="row gutters">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="biO"> Other</label>
                                <textarea class="form-control" id="other" name ="other"placeholder="other" maxlength="140" rows="3">{{$diagnosis->other}}</textarea>
                                @error('other')
                                <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror
                                <div class="form-text text-muted"><p id="characterLeft" class="help-block ">140 characters left</p></div>
                            </div>
                        </div>
                    </div>


                    <button type="submit" id="submit" name="submit" class="btn btn-primary float-right">update Diagnosis</button>

                </div>
            </div>
        </form>
    </div>
</div>


</div>
<!-- Content wrapper end -->

    </div>
@endsection
