@extends('admin.layout.master')

@section('title')
    Diagnoses
@endsection

@section('content')
    <div class="main-container">


        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Diagnosis</li>
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
                    <form method="get" action="{{route('admin.diagnose.index')}}">
                            @csrf
                    <div class="row">
                    
                        <div class="col-6 mb-4">
                            <input class="form-control" type="search" name="search" placeholder="search by name...." value="{{ request('search') ?? ' '}}">
                        </div>
                        <div class="col-4 mb-4">
                            <button class="btn btn-primary">Search</button>
                        </div>
                        
                    </div>
                </form>
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
                                    <th>ID</th>
                                    <th>Patient Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($diagnoses as $diagnose)
                                    <tr>
                                        <td>{{ $diagnose->id }}</td>
                                        <td>{{$diagnose->patients->name}}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('admin.diagnose.edit', $diagnose) }}"><button type="button" class="btn btn-info">
                                                        <i class="icon-edit1"></i>
                                                    </button>
                                                </a>
                                                <meta name="csrf-token" content="{{csrf_token()}}">
                                                <button data-id="{{$diagnose->id}}" data-name="patient" type="submit"  class="btn btn-danger show_confirm_two">
                                                    <i class="icon-cancel"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{ $diagnoses->links() }}
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
