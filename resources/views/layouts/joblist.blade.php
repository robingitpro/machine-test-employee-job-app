<div class="col-md-3">
    <div class="card">

        <div class="list-group list-group-flush">
            <a href="{{ route('jobs.view', $id) }}"
                class="list-group-item list-group-item-action {{ request()->is('jobs/view/*') ? 'active' : '' }}">Job
                detail</span></a>
            <a href="{{ route('candidates.list', $id) }}"
                class="list-group-item list-group-item-action {{ request()->is('candidates/list/*') ? 'active' : '' }}">List
                of
                Candidates applied for
                this
                Job</span></a>

        </div>
    </div>
</div><!-- /.col-md-3 -->
