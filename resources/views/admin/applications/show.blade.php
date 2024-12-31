@extends('layouts.admin')

@section('title', 'Application Details')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-body">
            <h2>Application Details</h2>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Name:</strong> {{ $application->first_name }} {{ $application->last_name }}</p>
                    <p><strong>Email:</strong> {{ $application->email }}</p>
                    <p><strong>Phone:</strong> {{ $application->phone }}</p>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Front Bill</label>
                        <img src="{{ Storage::url($application->front_bill) }}" class="img-fluid">
                        <a href="{{ Storage::url($application->front_bill) }}" class="btn btn-sm btn-primary mt-2" download>
                            Download Front Bill
                        </a>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Back Bill</label>
                        <img src="{{ Storage::url($application->back_bill) }}" class="img-fluid">
                        <a href="{{ Storage::url($application->back_bill) }}" class="btn btn-sm btn-primary mt-2" download>
                            Download Back Bill
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection