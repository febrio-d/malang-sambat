@extends('dashboard.main')

@section('container')   
<div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h3>{{ $status }} people's reports</h3>
        </div>
        <div class="container mt-4">
            @foreach ($reports->chunk(1) as $chunk)
            <div class="row">
                <div class="col">
                    @foreach ($chunk as $r)
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-lg-3">
                                @if ($r->status == 'processed')
                                <div class="position-absolute bg-primary text-light px-2 py-1 bg-opacity-75 rounded">Processed</div>
                                @elseif ($r->status == 'done')
                                <div class="position-absolute bg-success text-light px-2 py-1 bg-opacity-75 rounded">Done</div>
                                @endif
                                <img src="{{ asset('storage/' . $r->image) }}" class="img-thumbnail rounded-start" style="max-width: 200px" alt="{{ $r->image }}">
                            </div>
                            <div class="col-lg-9">
                                <div class="card-body">
                                <p class="card-text">{{ $r->desc }}</p>
                                <p class="card-text"><small class="text-muted">Reported by {{ $r->user->name }} {{ $r->created_at->diffForHumans() }}</small></p>
                                @if ($r->status == '0')
                                <a href="/dashboard/response/{{ $r->id }}" class="btn btn-primary">Response here</a>
                                @endif
                                @if ($r->status == 'processed')
                                <a href="/dashboard/responsed/{{ $r->id }}" class="btn btn-primary float-start">Check the response here</a>
                                <form action="/dashboard/closed" method="POST">
                                    @csrf
                                    <input type="hidden" name="report_id" id="report_id" value="{{ $r->id }}">
                                    <button type="submit" class="btn btn-warning float-end" onclick="return confirm('Are you sure that the report is solved?')">Finish the report</button>
                                </form>
                                @elseif ($r->status == 'done')
                                <a href="/dashboard/responsed/{{ $r->id }}" class="btn btn-primary">Check the response here</a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>    
            @endforeach
        </div>
    </main>
</div>
@endsection
