@extends('auth.main')

@section('container')
  		<div class="row justify-content-center">
  			<div class="col-lg-5">
		    	<main class="form-signin">
				  <form action="/" method="post">
				  	@csrf
				  	<div class="text-center">				  		
				  	  <img class="img-fluid mb-3" src="{{ asset('img/malang.png') }}" width="200">
				      <h4 class="mb-3 fw-normal">Malang Sambat</h4>
				  	</div>

				    <div class="form-floating">
				      <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" autofocus required>
				      <label for="username">Username</label>
				      @error('username')
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
					<small class="d-block text-center">Are you an employee? <a href="/adminsignin">Click here</a></small>
				    <p class="mt-4 text-muted text-center">Copyright &copy; 2021 Pemkot Malang</p>
				  </form>
				</main>
  			</div>
  		</div>
@endsection