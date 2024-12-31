@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    <h1 class="h2">Dashboard</h1>
    <div class="row my-4">
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Applications</h5>
                    <p class="card-text display-4">{{ $applicationsCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Jobs</h5>
                    <p class="card-text display-4">{{ $jobsCount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection