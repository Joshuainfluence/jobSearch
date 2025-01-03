@extends('layouts.admin')

@section('title', 'Add New Job')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Add New Job</h1>
        <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Jobs
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.jobs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <!-- Basic Job Information -->
                    <div class="col-md-6">
                        <label class="form-label">Job Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Company Name</label>
                        <input type="text" name="company" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Job Type</label>
                        <select name="type" class="form-control" required>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Contract">Contract</option>
                            <option value="Freelance">Freelance</option>
                        </select>
                    </div>

                    <!-- Salary Range -->
                    <div class="col-md-6">
                        <label class="form-label">Minimum Salary</label>
                        <input type="number" name="salary_min" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Maximum Salary</label>
                        <input type="number" name="salary_max" class="form-control" required>
                    </div>

                    <!-- Job Details -->
                    <div class="col-12">
                        <label class="form-label">Job Description</label>
                        <textarea name="description" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Responsibilities</label>
                        <textarea name="responsibilities" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Qualifications</label>
                        <textarea name="qualifications" class="form-control" rows="5" required></textarea>
                    </div>

                    <!-- Additional Information -->
                    <div class="col-md-6">
                        <label class="form-label">Number of Vacancies</label>
                        <input type="number" name="vacancy" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Application Deadline</label>
                        <input type="date" name="deadline" class="form-control" required>
                    </div>

                    <!-- Company Details -->
                    <div class="col-12">
                        <label class="form-label">Company Details</label>
                        <textarea name="company_details" class="form-control" rows="4" required></textarea>
                    </div>

                    <!-- Company Logo -->
                    <div class="col-md-6">
                        <label class="form-label">Company Logo</label>
                        <input type="file" name="company_logo" class="form-control" accept="image/*">
                    </div>

                    <!-- Status -->
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select name="is_active" class="form-control" required>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Create Job
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection