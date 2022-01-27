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
                @if ($r->status == 'processed')
                <div class="position-absolute bg-primary text-light px-2 py-1 bg-opacity-75 rounded">Processed</div>
                @elseif ($r->status == 'done')
                <div class="position-absolute bg-success text-light px-2 py-1 bg-opacity-75 rounded">Done</div>
                @endif
                <img src="{{ asset('storage/' . $r->image) }}" class="img-thumbnail rounded-start" style="width: 200px; height: 150px;" alt="{{ $r->image }}">
              </div>
              <div class="col-lg-10">
                <div class="card-body">
                  <p class="card-text">{{ $r->desc }}</p>
                  <p class="card-text"><small class="text-muted">Reported {{ $r->created_at->diffForHumans() }}</small></p>
                  <a href="/response/{{ $r->id }}" class="btn btn-primary">See the response here</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>    
@endforeach
@endsection