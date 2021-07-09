@extends('layouts/master')

@section('content')

	<h1>Edit User</h1>
	<hr>

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{ url('users') }}">Users</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
	  </ol>
	</nav>

	<div class="row justify-content-center">
		<div class="col-sm-6">

			@include('layouts/alert_error')

			<form action="{{ url('users/' . $user->id) }}" method="post">
				@method('PUT')
				@csrf
				<div class="mb-3">
			    	<label for="full-name">Name</label>
	                <input type="text" class="form-control" name="name" value="<?php echo (old('name') ? old('name') : $user->name); ?>" placeholder="Enter your full name" autocomplete="off" autofocus required>
			  	</div>
			  	<div class="mb-3">
			  		<label for="phone">Phone</label>
	                <input type="text" class="form-control" name="phone" value="<?php echo (old('phone') ? old('phone') : $user->phone); ?>" onkeyup="check_phone_validity(this.value, '{{ $user->id }}', '{{ url('verify-user-phone') }}')" placeholder="Provide a 11 digit phone number" autocomplete="off" required>
	                <span id="phone_check"></span>
			  	</div>
			  	<div class="mb-3">
			    	<label for="address">Address</label>
	                <textarea name="address" class="form-control" rows="2" placeholder="Enter your address" autocomplete="off" required><?php echo (old('address') ? old('address') : $user->address); ?></textarea>
			  	</div>
			  	<div class="mb-3">
			    	<label for="age">Age</label>
	                <input type="number" class="form-control" name="age" value="<?php echo (old('age') ? old('age') : $user->detail->age); ?>" min="1" max="130" placeholder="Enter your age" autocomplete="off">
			  	</div>
			  	<div class="mb-3">
			    	<label for="gender">Gender</label>
	                <select class="form-select" name="gender">
	                	<option value="male" <?php if((old('gender') ? old('gender') : $user->detail->gender) == 'male') echo 'selected'; ?>>Male</option>
					  	<option value="female" <?php if((old('gender') ? old('gender') : $user->detail->gender) == 'female') echo 'selected'; ?>>Female</option>
					</select>
			  	</div>
			  	<div class="mb-3">
			    	<label for="profession">Profession</label>
	                <input type="text" class="form-control" name="profession" value="<?php echo (old('profession') ? old('profession') : $user->detail->profession); ?>" placeholder="Enter your profession" autocomplete="off">
			  	</div>
				<div class="text-center">
		  			<button type="submit" class="btn btn-primary button">Update</button>
			  	</div>
			</form>
		</div>
	</div>

@endsection