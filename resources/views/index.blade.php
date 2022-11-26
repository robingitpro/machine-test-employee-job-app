@extends('layouts.app')

@section('content')
    <!-- content -->
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        @if (Session::get('success'))
                            <div class="alert alert-success"> {{ Session::get('success') }}</div>
                        @endif
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">

                                <h2 class="mb-0">All Jobs</h2>
                                <div class="ml-auto">
                                    <a href="{{ route('jobs.post') }}" class="btn btn-success"><i
                                            class="fa fa-plus-circle"></i> Post New
                                        Job</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                @include('layouts.search')

                            </div>
                            <div id="load_table">
                                <table class="table table-striped table-hover" id="load_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">Job Type</th>
                                            <th scope="col">No of Applications</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            
                                            $i = 1;
                                            
                                        @endphp
                                        @foreach ($jobs as $job)
                                            <tr>
                                                <th scope="row">{{ $i }}</th>
                                                <td>{{ $job->company_name }}</td>
                                                <td>{{ $job->email }}</td>
                                                <td>{{ $job->phone }}</td>
                                                <td>{{ $job->job_title }}</td>
                                                <td>{{ $job->job_type }}</td>
                                                <td>{{ isset($count_job_id[$job->id]) ? $count_job_id[$job->id] : '0' }}
                                                </td>
                                                <td width="150">
                                                    <a href="{{ route('jobs.view', $job->id) }}"
                                                        class="btn btn-sm btn-circle btn-outline-info" title="Show"><i
                                                            class="fa fa-eye"></i></a>




                                                </td>
                                            </tr>
                                            @php $i++; @endphp
                                        @endforeach


                                    </tbody>

                                </table>
                                <br>
                                {!! $jobs->links() !!}
                            </div>
                            <div id="search_load_table"></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
