@extends('dashboard.main')

@section('container')
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h3>Employees</h3>
            </div>
            <div class="container-fluid">
                @if (!$employees->count())
                    <h4 class="text-center">No employee found!</h4>
                @else
                    <div class="card shadow-lg mb-4">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Phone Number</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($employees as $e)    
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $e->name }}</td>
                                        <td>{{ $e->username }}</td>
                                        <td>{{ $e->phone }}</td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                @endif
            </div>
        </main>
    </div>
@endsection