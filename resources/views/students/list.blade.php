@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Student Form</h2>
    <form action="{{ route('students.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="image" class="form-label">Profile Image</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
        </div>

        <div class="col-md-6 mb-3">
            <label for="email_id" class="form-label">Email ID</label>
            <input type="email" class="form-control" name="email_id" id="email_id" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="standard" class="form-label">Standard</label>
            <input type="text" class="form-control" name="standard" id="standard" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="entry_year" class="form-label">Entry Year</label>
            <select class="form-select" name="entry_year" id="entry_year">
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
</div>

{{ $dataTable->table() }}

@endsection
@push('script')

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endpush