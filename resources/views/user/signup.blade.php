@extends('layouts.master')

@section('title')
	Sign Up
@endsection

@section('content')
<div class="row">
	<div class="col-md-offset-4">
		<h1>Sign Up</h1>
		@if(count($errors) > 0)
			<div class="alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif
		<form action="{{ route('user.signup') }}" method="post">
			<div class="form-group">
				<label for="first_name">First Name</label>
				<input class="form-control" type="text" id="first_name" name="first_name">
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input class="form-control" type="text" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" id="password" name="password">
			</div>
			<button class="btn btn-primary" type="submit">Sign Up</button>
			{{ csrf_field() }}
		</form>
	</div>
</div>
@endsection