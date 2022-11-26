@extends('layouts.app')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                @include('layouts.joblist', ['id' => $job_id])

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Job Detail</strong>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-3 col-form-label">Company Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $jobs->company_name }}</p>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $jobs->email }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-3 col-form-label">Phone</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $jobs->phone }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">Location</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $jobs->location }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="company_id" class="col-md-3 col-form-label">Job Title</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $jobs->job_title }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="company_id" class="col-md-3 col-form-label">Job Decription</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $jobs->job_description }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="company_id" class="col-md-3 col-form-label">Job Type</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">
                                                {{ $jobs->job_type }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-9 offset-md-3">
                                            <a href="{{ route('candidates.create', $jobs->id) }}"
                                                class="btn btn-info">Apply</a>
                                            <a href="{{ route('home') }}" class="btn btn-warning">Back</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
