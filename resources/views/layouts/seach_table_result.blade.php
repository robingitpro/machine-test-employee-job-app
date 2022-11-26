<table class="table table-striped table-hover" id="load_table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Company Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Job Title</th>
            <th scope="col">Job Type</th>
            <th scope="col">No of Application</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @php $i=1; @endphp
        @foreach ($products as $job)
            <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $job->company_name }}</td>
                <td>{{ $job->email }}</td>
                <td>{{ $job->phone }}</td>
                <td>{{ $job->job_title }}</td>
                <td>{{ $job->job_type }}</td>
                <td>{{ isset($count_job_id[$job->id]) ? $count_job_id[$job->id] : '0' }}</td>
                <td width="150">
                    <a href="{{ route('jobs.view', $job->id) }}" class="btn btn-sm btn-circle btn-outline-info"
                        title="Show"><i class="fa fa-eye"></i></a>



                </td>
            </tr>
            @php $i++; @endphp
        @endforeach


    </tbody>

</table>
{!! $products->links() !!}
