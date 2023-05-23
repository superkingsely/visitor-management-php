@extends('dashboard')

@section('content')

<h2 class="mt-3">Sub User Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    	<li class="breadcrumb-item"><a href="/sub_user">Sub Management</a></li>
    	<li class="breadcrumb-item active">Add New Visitor</li>
  	</ol>
</nav>

<div class="row mt-4">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">Add New Visitor</div>
			<div class="card-body">
				<form method="POST" action="{{ route('visitor.add_validation') }}">
					@csrf
					<div class="form-group mb-3">
		        		<label><b>Name</b></label>
		        		<input type="text" name="visitor_name" class="form-control" placeholder="Name" />
		        		@if($errors->has('visitor_name'))
		        		<span class="text-danger">{{ $errors->first('visitor_name') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Email</b></label>
		        		<input type="text" name="visitor_email" class="form-control" placeholder="Email" />
		        		@if($errors->has('visitor_email'))
		        		<span class="text-danger">{{ $errors->first('visitor_email') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Mobile Number</b></label>
		        		<input type="text" name="visitor_mobile_no" class="form-control" placeholder="Mobile number" />
		        		@if($errors->has('visitor_mobile_no'))
		        		<span class="text-danger">{{ $errors->first('visitor_mobile_no') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Address</b></label>
		        		<input type="text" name="visitor_address" class="form-control" placeholder="Address" />
		        		@if($errors->has('visitor_address'))
		        		<span class="text-danger">{{ $errors->first('visitor_address') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Person's Name</b></label>
		        		<input type="text" name="visitor_meet_person_name" class="form-control" placeholder="looking for who?" />
		        		@if($errors->has('visitor_meet_person_name'))
		        		<span class="text-danger">{{ $errors->first('visitor_meet_person_name') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Department</b></label>
		        		<input type="text" name="visitor_department" class="form-control" placeholder="In which department?"/>
		        		@if($errors->has('visitor_department'))
		        		<span class="text-danger">{{ $errors->first('visitor_department') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Give a short reason</b></label>
		        		<input type="text" name="visitor_reason_to_meet" class="form-control" placeholder="Write ur message here" />
		        		@if($errors->has('visitor_reason_to_meet'))
		        		<span class="text-danger">{{ $errors->first('visitor_reason_to_meet') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Time of entry</b></label>
		        		<input type="text" name="visitor_enter_time" class="form-control" placeholder="time" />
		        		@if($errors->has('visitor_enter_time'))
		        		<span class="text-danger">{{ $errors->first('visitor_enter_time') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>visitor remark</b></label>
		        		<input type="text" name="visitor_outing_remark" class="form-control" placeholder="Remark" />
		        		@if($errors->has('visitor_outing_remark'))
		        		<span class="text-danger">{{ $errors->first('visitor_outing_remark') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Time of exit</b></label>
		        		<input type="text" name="visitor_out_time" class="form-control" placeholder="time" />
		        		@if($errors->has('visitor_out_time'))
		        		<span class="text-danger">{{ $errors->first('visitor_out_time') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Status</b></label>
		        		<input type="text" name="visitor_status" class="form-control" placeholder="Status" />
		        		@if($errors->has('visitor_status'))
		        		<span class="text-danger">{{ $errors->first('visitor_status') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Enter by</b></label>
		        		<input type="text" name="visitor_enter_by" class="form-control" placeholder="value" />
		        		@if($errors->has('visitor_enter_by'))
		        		<span class="text-danger">{{ $errors->first('visitor_enter_by') }}</span>
		        		@endif
		        	</div>
		        	
		        	
		        	<div class="form-group mb-3">
		        		<input type="submit" class="btn btn-primary" value="Add" />
		        	</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection