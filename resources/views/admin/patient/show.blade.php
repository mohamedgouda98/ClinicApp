@extends('admin.layout.master')

@section('title')
Patient Details
@endsection

@section('content')
<div class="main-container">


	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Patients Details</li>
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
									 patient details table
                                *************************
								*************************
								*************************-->
					<h4 class="table-title"> Patient details </h4>
					<div class="table-responsive">
						<table class="table m-0">
							<thead>
								<tr>
									<th>Name</th>
									<th>age</th>
									<th>address</th>
									<th>phone</th>
									<th>number of births </th>
									<th>note </th>
									<th>date </th>



								</tr>
							</thead>
							<tbody>

								<tr>
									<td>{{$patient->name}}</td>
									<td>{{$patient->age}}</td>
									<td>{{$patient->address}}</td>
									<td>{{$patient->phone}}</td>
									<td>{{$patient->number_of_births}}</td>
									<td>{{$patient->note}}</td>
									<td>{{$patient->date}}</td>


								</tr>
							</tbody>
						</table>
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
		<!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="table-container">


					<!--*************************
									*************************
									*************************
									 patient details table
                                *************************
								*************************
								*************************-->
					<h4 class="table-title"> parents details </h4>
					<div class="table-responsive">
						<table class="table m-0">
							<thead>
								<tr>
									<th>Father Name</th>
									<th>Father age</th>
									<th>Father Job </th>
									<th>Mother Name</th>
									<th>Mother age</th>
									<th>Mother Job </th>


								</tr>
							</thead>
							<tbody>

								<tr>
									<td>{{$patient->father_name}}</td>
									<td>{{$patient->father_age}}</td>
									<td>{{$patient->father_job}}</td>
									<td>{{$patient->mather_name}}</td>
									<td>{{$patient->mather_age}}</td>
									<td>{{$patient->mather_job}}</td>


								</tr>
							</tbody>
						</table>
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


		<!-- Row start -->
		<div class="row gutters">
			@foreach($diagnosis as $diagnoses)
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="card">
				@foreach( $diagnoses->diagnosisImg as $diagnosesImg)
					<img class="card-img-top" src="{{$diagnosesImg->img}}" alt="Card image cap">
					@endforeach
					<div class="card-header">
						<div class="card-title text-center"> Diagnosis: {{$diagnoses->diagnosis}}</div>

					</div>

					<div class="card-body">
						<div class="doctors-list">

							<ul class="list-group">
								<li class="list-group-item "> <strong>Complaint :</strong> {{$diagnoses->complaint}} </li>
								<li class="list-group-item"><strong>investigation :</strong> {{$diagnoses->investigation}}</li>
								<li class="list-group-item"><strong>Treamtent :</strong> {{$diagnoses->treamtent}}</li>
								<li class="list-group-item"><strong>Reseen : </strong>{{$diagnoses->reseen}}</li>
								<li class="list-group-item"><strong>hn : </strong>{{$diagnoses->hn}}</li>
								<li class="list-group-item"> <strong>phnx :</strong> {{$diagnoses->phnx}}</li>
								<li class="list-group-item "><strong>wt : </strong>{{$diagnoses->wt}} </li>
								<li class="list-group-item"><strong>tep :</strong> {{$diagnoses->tep}}</li>
								<li class="list-group-item"><strong>hc : </strong>{{$diagnoses->hc}}</li>
								<li class="list-group-item"><strong>chest :</strong> {{$diagnoses->chest}}</li>
								<li class="list-group-item"><strong> abd : </strong>{{$diagnoses->abd}}</li>
								<li class="list-group-item"><strong>gentalia :</strong> {{$diagnoses->gentalia}}</li>
								<li class="list-group-item"> <strong>other : </strong>{{$diagnoses->other}}</li>
								<li class="list-group-item"> <strong>created_at : </strong>{{$diagnoses->created_at}}</li>
							</ul>

						</div>
						<div class="text-center">
						<a href="{{route('admin.diagnose.edit',$diagnoses->id)}}" class="btn  btn-primary text-center">Edit</a>
						</div>
					</div>

				</div>
			</div>
			@endforeach

		</div>
		<div class="text-center">
						<a href="#" class="btn  btn-primary text-center">Re-Order</a>
						</div>



	</div>
	<!-- Content wrapper end -->



</div>
@endsection

@push('custom-scripts')
<script src="{{ asset('assetsAdmin/js/custom.js') }}"></script>

@endpush
