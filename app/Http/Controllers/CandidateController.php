<?php

namespace App\Http\Controllers;

use App\Mail\CandidateNotifiactionMail;
use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Models\Jobs;
use Illuminate\Support\Facades\Mail;

class CandidateController extends Controller
{
    //
    public function index($id)
    {
        $job = $id;

        return view('candidate_create', compact('job'));
    }
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:candidates,email,' . $id . 'job_id',
            'phone' => 'required|numeric|unique:candidates,phone,' . $id . 'job_id',
            'resume' => 'required|mimes:docx,pdf,doc|max:3072',
        ]);

        $candidates = new Candidates;
        $candidates->job_id = $id;
        $candidates->name = $request->name;
        $candidates->email = $request->email;
        $candidates->phone = $request->phone;
        $rand = rand('1111111', '9999999');
        if ($request->hasFile("resume")) {

            $vresume = $request->file("resume");
            $ext = $vresume->extension();
            $image_name = $rand . '.' . $ext;
            $destinationPath = '/uploads';
            $request->file("resume")->storeAs($destinationPath, $image_name);
            $candidates->resume = $image_name;
        } else {
            $candidates->resume = "";
        }
        $store = $candidates->save();
        if ($store) {
            $jobs = Jobs::where('id', $id)->first();
            Mail::to($jobs->email)->send(new CandidateNotifiactionMail($candidates));

            return redirect('/')->with('success', 'You request has been submitted Successfully');
        } else {
            return back()->with('fail', 'Something went wrong.Your request is failed');
        }
    }

    public function candidate_list($id)
    {
        $job_id = $id;
        $candidates = Candidates::where('job_id', $id)->orderBy('id', 'DESC')->paginate(5);
        return view('candidate_list', compact('candidates', 'job_id'));
    }
}