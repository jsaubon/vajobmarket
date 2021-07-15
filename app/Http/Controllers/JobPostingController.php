<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function index() {
        return view('jobPosting.jobPosting');
    }
}
