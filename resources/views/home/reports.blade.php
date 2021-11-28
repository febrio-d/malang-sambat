@extends('home.main')

@section('container')
<h3>List of your reports</h3>
@foreach ($reports->chunk(1) as $chunk)
<div class="row">
    <div class="col">
        @foreach ($chunk as $r)
          <div class="card mb-3">
            <div class="row">
              <div class="col-lg-2">
                <img src="{{ asset('storage/' . $r->image) }}" class="img-thumbnail rounded-start" style="max-width: 200px" alt="{{ $r->image }}">
              </div>
              <div class="col-lg-10">
                <div class="card-body">
                  <p class="card-text">{{ $r->desc }}</p>
                  <p class="card-text"><small class="text-muted">{{ $r->created_at->diffForHumans() }}</small></p>
                  <a href="/report/{{ $r->id }}" class="btn btn-primary">See the response here</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>    
@endforeach
@endsection