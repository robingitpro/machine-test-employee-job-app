<?php

namespace App\Repositories;

use App\Models\Jobs;

use App\Models\Candidates;

class SearchTypeRepository
{
    public static function getsearchItem($name)
    {
        $candidate_jobs_count = Candidates::all();
        $jobs_val_count = [];
        foreach ($candidate_jobs_count as $count_val) :
            $jobs_val_count[] = $count_val->job_id;
        endforeach;
        $count_job_id = array_count_values($jobs_val_count);
        $key = explode(' ', $name);
        $job_data = Jobs::where(function ($q) use ($key) {
            foreach ($key as $value) {
                $q->orWhere('job_title', 'like', "%{$value}%");
                $q->orWhere('job_type', 'like', "%{$value}%");
                $q->orWhere('company_name', 'like', "%{$value}%");
                $q->orWhere('phone', 'like', "%{$value}%");
                $q->orWhere('email', 'like', "%{$value}%");
            }
        })->orderBy('id', 'desc')->paginate(5);
        return [
            'job_data' =>
            $job_data,
            'count_job_id' =>
            $count_job_id,

        ];
    }
}