<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Repositories\SearchTypeRepository;

use App\Models\Jobs;

use App\Models\Candidates;

class JobController extends Controller
{
    //

    public function index()
    {
        $candidate_jobs_count = Candidates::all();
        $jobs_val_count = [];
        foreach ($candidate_jobs_count as $count_val) :
            $jobs_val_count[] = $count_val->job_id;
        endforeach;
        $count_job_id = array_count_values($jobs_val_count);
        $jobs = Jobs::orderBy('id', 'desc')->paginate(5);
        return view('index', compact('jobs', 'count_job_id'));
    }

    public function post_a_job()
    {

        return view('postAjob');
    }

    public function store(Request $request)
    {

        $request->validate([
            'company_name' => 'required|unique:jobs,company_name',
            'email' => 'required|unique:jobs,email',
            'phone' => 'required|numeric|unique:jobs,phone',
            'location' => 'required',
            'job_title' => 'required',
            'job_description' => 'required',
            'job_type' => 'required',
        ]);

        $jobs = new Jobs;
        $jobs->company_name = $request->company_name;
        $jobs->email = $request->email;
        $jobs->phone = $request->phone;
        $jobs->job_title = $request->job_title;
        $jobs->location = $request->location;
        $jobs->job_description = $request->job_description;
        $jobs->job_type = $request->job_type;
        $store = $jobs->save();
        if ($store) {

            return redirect('/')->with('success', 'Jobs posted Successfully');
        } else {
            return back()->with('fail', 'Something went wrong.Jobs posting failed');
        }
    }

    public function job_detail($id)
    {
        $jobs = Jobs::findOrFail($id);
        $job_id = $id;
        return view('jobdetail', compact('jobs', 'job_id'));
    }

    public function searchajaxjobsload(Request $request)
    {

        $result = SearchTypeRepository::getsearchItem($request->search);
        $products = $result['job_data'];
        $count_job_id = $result['count_job_id'];
        return response()->json([
            'result' => view('layouts.seach_table_result', compact('products', 'count_job_id'))->render(),
        ]);
    }
}