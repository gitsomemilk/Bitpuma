<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function saveForm(SubmissionRequest $request)
    {
       
        $submission = Submission::create( $request->validated() );

        return redirect('/')->with('success', 'Bedankt voor je inzending!');
    }

    public function index()
    {
        $submissions = Submission::all();
        return view('submission.index', ['submission' => $submissions]);
    }
     public function destroy($id)
     {
        $submission= Submission::find($id);
        $submission->delete();
        return redirect('/submissions');
     }
}
