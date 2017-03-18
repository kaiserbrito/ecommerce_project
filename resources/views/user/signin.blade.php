@extends('layouts.master')

@section('title')
	Sign In
@endsection

@section('content')
<div class="row">
	<div class="col-md-offset-4">
		<h1>Sign In</h1>
		@if(count($errors) > 0)
			<div class="alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif
		<form action="{{ route('user.signin') }}" method="post">			
			<div class="form-group">
				<label for="email">E-mail</label>
				<input class="form-control" type="text" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" id="password" name="password">
			</div>
			<button class="btn btn-primary" type="submit">Sign In</button>
			{{ csrf_field() }}
		</form>
		<hr>
		<div id="footer">
			<a href="{{ route('user.signup') }}">
				Don't have an account?
				<span>Sign Up</span>
			</a>
		</div>
	</div>
</div>
@endsection