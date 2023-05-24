@extends('dashboard')

@section('content')

<h2 class="mt-3">Sub User Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    	<li class="breadcrumb-item"><a href="/visitor">visitor Management</a></li>
    	<li class="breadcrumb-item active">Edit Visitor</li>
  	</ol>
</nav>

<div class="row mt-4">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">Edit Visitor</div>
			<div class="card-body">
				<form method="POST" action="{{ route('visitor.edit_validation') }}">
					@csrf
					<div class="form-group mb-3">
		        		<label><b>Name</b></label>
		        		<input type="text" name="name" class="form-control" placeholder="Name" value="{{ $data->visitor_name }}" />
		        		@if($errors->has('visitor_name'))
		        		<span class="text-danger">{{ $errors->first('name') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Email</b></label>
		        		<input type="text" name="visitor_email" class="form-control" placeholder="Email" value="{{ $data->visitor_email }}">
		        		@if($errors->has('visitor_email'))
		        			<span class="text-danger">{{ $errors->first('visitor_email') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Mobile number</b></label>
		        		<input type="text" name="visitor_mobile_no" class="form-control" placeholder="mobile number" value="{{ $data->visitor_mobile_no }}">
		        		@if($errors->has('visitor_mobile_no'))
		        			<span class="text-danger">{{ $errors->first('visitor_mobile_no') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Address</b></label>
		        		<input type="text" name="visitor_address" class="form-control" placeholder="Email" value="{{ $data->visitor_address }}">
		        		@if($errors->has('visitor_address'))
		        			<span class="text-danger">{{ $errors->first('visitor_address') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Meet person name</b></label>
		        		<input type="text" name="visitor_meet_person_name" class="form-control" placeholder="Email" value="{{ $data->visitor_meet_person_name }}">
		        		@if($errors->has('visitor_meet_person_name'))
		        			<span class="text-danger">{{ $errors->first('visitor_meet_person_name') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Department</b></label>
		        		<input type="text" name="visitor_department" class="form-control" placeholder="Email" value="{{ $data->visitor_department }}">
		        		@if($errors->has('visitor_department'))
		        			<span class="text-danger">{{ $errors->first('visitor_department') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Reason to meet</b></label>
		        		<input type="text" name="visitor_reason_to_meet" class="form-control" placeholder="Email" value="{{ $data->visitor_reason_to_meet }}">
		        		@if($errors->has('visitor_reason_to_meet'))
		        			<span class="text-danger">{{ $errors->first('visitor_reason_to_meet') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Enter time</b></label>
		        		<input type="text" name="visitor_enter_time" class="form-control" placeholder="Email" value="{{ $data->visitor_enter_time }}">
		        		@if($errors->has('visitor_enter_time'))
		        			<span class="text-danger">{{ $errors->first('visitor_enter_time') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Outting remark</b></label>
		        		<input type="text" name="visitor_address" class="form-control" placeholder="Email" value="{{ $data->visitor_address }}">
		        		@if($errors->has('visitor_address'))
		        			<span class="text-danger">{{ $errors->first('visitor_address') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Address</b></label>
		        		<input type="text" name="visitor_outing_remark" class="form-control" placeholder="Email" value="{{ $data->visitor_outing_remark }}">
		        		@if($errors->has('visitor_outing_remark'))
		        			<span class="text-danger">{{ $errors->first('visitor_outing_remark') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Out time</b></label>
		        		<input type="text" name="visitor_out_time" class="form-control" placeholder="Email" value="{{ $data->visitor_out_time }}">
		        		@if($errors->has('visitor_out_time'))
		        			<span class="text-danger">{{ $errors->first('visitor_out_time') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Status</b></label>
		        		<input type="text" name="visitor_status" class="form-control" placeholder="Email" value="{{ $data->visitor_status }}">
		        		@if($errors->has('visitor_status'))
		        			<span class="text-danger">{{ $errors->first('visitor_status') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Enter by</b></label>
		        		<input type="text" name="visitor_enter_by" class="form-control" placeholder="Email" value="{{ $data->visitor_enter_by }}">
		        		@if($errors->has('visitor_enter_by'))
		        			<span class="text-danger">{{ $errors->first('visitor_enter_by') }}</span>
		        		@endif
		        	</div>
		        	
		        	
		        	<div class="form-group mb-3">
		        		<input type="hidden" name="hidden_id" value="{{ $data->id }}" />
		        		<input type="submit" class="btn btn-primary" value="Edit" />
		        	</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection