@extends('home.main')

@section('container')
    <div class="row">
        <div class="col-md-6">
            <h3>Edit Profile</h3>
            <div class="card shadow-lg px-4 py-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" value="{{ auth()->user()->username }}">    
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ auth()->user()->email }}">    
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone">    
                    </div>
                    <button class="btn btn-primary float-end" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection