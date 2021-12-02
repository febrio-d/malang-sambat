@extends('dashboard.main')

@section('container')    
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h3>Response the report</h3>
            </div>
            <div class="container-fluid mt-4">
                <div class="row mb-3">
                    <div class="col">
                        <label for="name" class="form-label">Reported by</label>
                        <input class="form-control" id="name" readonly value="{{ $r->user->name }}">
                    </div>
                    <div class="col">
                        <label for="date" class="form-label">At</label>
                        <input class="form-control" id="date" readonly value="{{ $r->created_at }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3" readonly>{{ $r->desc }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <img src="{{ asset('storage/' .  $r->image) }}" alt="{{ $r->image }}" class="img-thumbnail d-block" style="max-width: 150px">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Response</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3" readonly>{{ $responses->response }}</textarea>
                </div>
            </div>
        </main>
    </div>
@endsection