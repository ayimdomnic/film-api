@extends('layouts.app')


@section('content')

<br>
<br>
	<div class="card-body">
		<div class="col-md-8">

		</div>
		<div class="col-md-4">
		<form method="post" action="{{ route('login')}}">
			{{ csrf_field() }}
		  <div class="form-group">
		    <label for="email">Email address: </label>
		    <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}" aria-describedby="emailHelp" placeholder="Enter email">
		    @foreach ($errors->all() as $error)
                <small id="errorHelp" class="form-text text-muted">{{ $error }}</small>
            @endforeach
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Remember Me?</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
</div>

@endsection