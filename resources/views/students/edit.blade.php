@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Student Form</h2>
    <form action="{{ route('students.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-md-6 mb-3">
            <input type="hidden" name="id" value="{{ encrypt($student->id) }}">
            <label for="image" class="form-label">Profile Image</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
        </div>

        <div class="col-md-6 mb-3">
            <label for="email_id" class="form-label">Email ID</label>
            <input type="email" class="form-control" name="email_id" id="email_id" value="{{ $student->email_id }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $student->first_name }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $student->last_name }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" value="{{ $student->username }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ $student->date_of_birth }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="standard" class="form-label">Standard</label>
            <input type="text" class="form-control" name="standard" id="standard" value="{{ $student->standard }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" name="gender" id="gender">
                <option value="male" {{ ($student->gender == 'male')?'selected':'' }}>Male</option>
                <option value="female" {{ ($student->gender == 'female')?'selected':'' }}>Female</option>
                <option value="other" {{ ($student->gender == 'other')?'selected':'' }} >Other</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="entry_year" class="form-label">Entry Year</label>
          
            <select class="form-select" name="entry_year" id="entry_year">
                <option value="2024" {{ ($student->admission == '2024')?'selected':'' }}>2024</option>
                <option value="2025" {{ ($student->admission == '2025')?'selected':'' }}>2025</option>
                <option value="2026" {{ ($student->admission == '2026')?'selected':'' }}>2026</option>
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
</div>


@endsection
@push('script')



@endpush