@extends('auth.main')

@section('container')
  		<div class="row justify-content-center">
  			<div class="col-lg-6">
		    	<main class="form-signin">
				  <form action="/" method="post">
				  	@csrf
				  	<div class="text-center">				  		
				  	  <img class="mb-5" src="{{ asset('img/malang.png') }}" width="250">
				      <h4 class="mb-3 fw-normal">Sambat Malang</h4>
				  	</div>

				    <div class="form-floating">
				      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required>
				      <label for="email">Email address</label>
				      @error('email')
						<div class="invalid-feedback">
							{{ $message }}
      					</div>
			      	  @enderror
				    </div>
				    <div class="form-floating">
				      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
				      <label for="password">Password</label>
				    </div>

				    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
				    <small class="d-block text-center mt-1">Don't have an account? <a href="/signup">Sign Up here</a></small>
				    <p class="mt-4 text-muted text-center">Copyright &copy; 2021 Pemkot Malang</p>
				  </form>
				</main>
  			</div>
  		</div>
@endsection