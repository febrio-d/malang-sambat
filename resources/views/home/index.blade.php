@extends('home.main')

@section('container')    
    <h3>Insert report</h3>
    <div class="card px-4 py-4">
        <form action="/home" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea class="form-control" id="desc" name="desc" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control d-block" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection