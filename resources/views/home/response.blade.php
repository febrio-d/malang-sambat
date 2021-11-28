div@extends('home.main')

@section('container')    
    <h3>Report Response</h3>
    <div class="card px-4 py-4">
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" readonly>{{ $r->desc }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <img src="{{ asset('storage/' .  $r->image) }}" alt="{{ $r->image }}" class="img-thumbnail d-block" style="max-width: 150px">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" readonly>{{ $resp['response'] }}</textarea>
            </div>
    </div>
@endsection