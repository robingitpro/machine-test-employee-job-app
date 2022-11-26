@extends('layouts.app')

@section('content')
    <!-- content -->
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Add New Job</strong>
                        </div>
                        <form method="post" action="{{ route('jobs.store') }}">
                            @if (Session::get('fail'))
                                <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="company_name" class="col-md-3 col-form-label">Company Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="company_name" id="company_name"
                                                    class="form-control" value="{{ old('company_name') }}">
                                                <span clss="text-danger" style='color:red'>
                                                    @error('company_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>

                                            </div>

                                        </div>



                                        <div class="form-group row">
                                            <label for="email" class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" name="email" id="email" class="form-control"
                                                    value="{{ old('email') }}">
                                                <span clss="text-danger" style='color:red'>
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>

                                        </div>



                                        <div class="form-group row">
                                            <label for="phone" class="col-md-3 col-form-label">Phone</label>
                                            <div class="col-md-9">
                                                <input type="number" name="phone" id="phone" class="form-control"
                                                    value="{{ old('phone') }}">
                                                <span clss="text-danger" style='color:red'>
                                                    @error('phone')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="location" class="col-md-3 col-form-label">Location</label>
                                            <div class="col-md-9">
                                                <textarea name="location" id="location" rows="3" class="form-control">{{ old('address') }}</textarea>
                                                <span clss="text-danger" style='color:red'>
                                                    @error('location')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="job_title" class="col-md-3 col-form-label">Job Title</label>
                                            <div class="col-md-9">
                                                <input type="text" name="job_title" id="job_title" class="form-control"
                                                    value="{{ old('job_title') }}">
                                                <span clss="text-danger" style='color:red'>
                                                    @error('job_title')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <label for="job_description" class="col-md-3 col-form-label">Job
                                                Description</label>
                                            <div class="col-md-9">
                                                <textarea name="job_description" id="job_description" rows="3" class="form-control">{{ old('job_description') }}</textarea>
                                                <span clss="text-danger" style='color:red'>
                                                    @error('job_description')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="job_type" class="col-md-3 col-form-label">Job type</label>
                                            <div class="col-md-9">
                                                <select name="job_type" id="job_type" class="form-control">
                                                    @include('layouts.jobtype')
                                                </select>
                                                <span clss="text-danger" style='color:red'>
                                                    @error('job_type')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>


                                        <hr>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-9 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Save</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
