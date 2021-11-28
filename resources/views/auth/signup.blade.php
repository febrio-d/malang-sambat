@extends('auth.main')

@section('container')
	<div class="row justify-content-center">
		<div class="col-lg-5">
			<main class="form-signup">
			  <form action="/signup" method="post">
			  	@csrf
			  	<div class="text-center">				  		
				  <img class="img-fluid mb-3" src="{{ asset('img/malang.png') }}" width="200">
				  <h4 class="mb-3 fw-normal">Sambat Malang</h4>
				</div>

				<div class="form-floating">
				  <input type="text" name="id" class="form-control @error('id') is-invalid @enderror" id="id" placeholder="id" value="{{ old('id') }}" required autofocus>
				  <label for="id">ID</label>
				  @error('id')
					<div class="invalid-feedback">
						{{ $message }}
					  </div>
				  @enderror
				</div>
			    <div class="form-floating">
			      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}" required>
			      <label for="name">Name</label>
			      @error('name')
					<div class="invalid-feedback">
						{{ $message }}
      				</div>
			      @enderror
			    </div>
			    <div class="form-floating">
			      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required>
			      <label for="username">Username</label>
			      @error('username')
					<div class="invalid-feedback">
						{{ $message }}
      				</div>
			      @enderror
			    </div>
			    <div class="form-floating">
			      <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="phone" value="{{ old('phone') }}" required>
			      <label for="phone">Phone Number</label>
			      @error('email')
					<div class="invalid-feedback">
						{{ $message }}
      				</div>
			      @enderror
			    </div>
			    <div class="form-floating">
			      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
			      <label for="password">Password</label>
			      @error('password')
					<div class="invalid-feedback">
						{{ $message }}
      				</div>
			      @enderror
			    </div>
			    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
			  </form>
			  <small class="d-block text-center mt-1">Have an account? <a href="/">Sign In</a></small>
			  <p class="mt-3 text-muted text-center">Copyright &copy; 2021 Pemkot Malang</p>
			</main>
		</div>	
	</div>
@endsection