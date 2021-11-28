@extends('home.main')

@section('container')
        <h3>Profile</h3>
        <div class="card shadow-lg mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 h5">ID :</div>
                    <div class="col h5">{{ auth()->user()->id }}</div>
                </div>
                <div class="row">
                    <div class="col-md-3 h5">Name :</div>
                    <div class="col h5">{{ auth()->user()->name }}</div>
                </div>
                <div class="row">
                    <div class="col-md-3 h5">Username :</div>
                    <div class="col h5">{{ auth()->user()->username }}</div>
                </div>
                <div class="row">
                    <div class="col-md-3 h5">Phone Number :</div>
                    <div class="col h5">{{ auth()->user()->phone }}</div>
                </div>
            </div>
        </div>
@endsection