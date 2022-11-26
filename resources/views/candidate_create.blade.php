@extends('layouts.app')

@section('content')
    <!-- content -->
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Add Candidate for this job</strong>
                        </div>

                        <form method="post" action="{{ route('candidates.store', $job) }}" enctype="multipart/form-data">
                            @if (Session::get('fail'))
                                <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-3 col-form-label">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" id="name" class="form-control"
                                                    value="{{ old('name') }}">
                                                <span clss="text-danger" style='color:red'>
                                                    @error('name')
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
                                            <label for="resume" class="col-md-3 col-form-label">Resume</label>
                                            <div class="col-md-9">
                                                <input type="file" name="resume" id="resume" class="form-control"
                                                    value="{{ old('phone') }}">
                                                <p>(Supported
                                                    format:-Pdf,docx,doc Upload size:Maximum 3MB)</p>
                                                <span clss="text-danger" style='color:red'>
                                                    @error('resume')
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
