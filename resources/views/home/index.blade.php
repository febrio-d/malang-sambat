@extends('home.main')

@section('container')    
    <h3>Sambatan</h3>
    <div class="card px-4 py-4">
        <form>
            <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <textarea class="form-control" id="text" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control d-block" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection