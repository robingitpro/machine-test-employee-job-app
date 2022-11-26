@extends('layouts.app')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                @include('layouts.joblist', ['id' => $job_id])

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>List of Candidates applied to this job</strong>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Resume</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach ($candidates as $candidate)
                                            <tr>
                                                <th scope="row">{{ $i }}</th>
                                                <td>{{ $candidate->name }}</td>
                                                <td>{{ $candidate->email }}</td>
                                                <td>{{ $candidate->phone }}</td>

                                                <td width="150">
                                                    <a href="{{ asset('uploads') }}/{{ $candidate->resume }}"
                                                        class="btn btn-info" title="Show">Download</a>



                                                </td>
                                            </tr>
                                            @php $i++; @endphp
                                        @endforeach


                                    </tbody>
                                </table>
                                {!! $candidates->links() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
