@extends('dashboard.main')

@section('container')
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h3>Register</h3>
            </div>
            <div class="container-fluid">
                <div class="card shadow-lg mb-4">
                    <div class="card-header">
                        <h4 class="text-center">Register New Employee</h4>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/register" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="mb-2">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="mb-2">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                            <button type="submit" class="btn btn-primary mt-1">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection