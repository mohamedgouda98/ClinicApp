@extends('admin.layout.master')

@section('title')
    Patient
@endsection

@section('content')
    <div class="main-container">


        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Patients</li>
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
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table-container">

                        <!--*************************
                            *************************
                            *************************
                            Basic table start
                        *************************
                        *************************
                        *************************-->
                        <div class="table-responsive">
                            <table id="basicExample" class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Booking ID</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->name }}</td>
                                        <td>@foreach($patient->book as $book)
                                            {{$book->id}}
                                            @endforeach</td>
                                        <td>{{ $patient->age }}</td>
                                        <td>{{ $patient->address }}</td>
                                        <td>{{ $patient->phone }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('admin.patient.edit', $patient) }}"><button type="button" class="btn btn-info">
                                                    <i class="icon-edit1"></i>
                                                </button>
                                                </a>
                                                <a href="{{ route('admin.patient.show', $patient) }}"><button type="button" class="btn btn-success">
                                                        <i class="icon-user-check"></i>
                                                    </button>
                                                </a>
                                                <meta name="csrf-token" content="{{csrf_token()}}">
                                                <button data-id="{{$patient->id}}" data-name="patient" type="submit"  class="btn btn-danger show_confirm_two">
                                                    <i class="icon-cancel"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{ $patients->links() }}
                        </div>
                        <!--*************************
                            *************************
                            *************************
                            Basic table end
                        *************************
                        *************************
                        *************************-->

                    </div>
                </div>
            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

    </div>
@endsection

@push('custom-scripts')
    <script src="{{ asset('assetsAdmin/js/custom.js') }}"></script>
@endpush
