<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Job;

class DashboardController extends Controller
{
    public function index()
    {

        $data = [
            'applicationsCount' => Application::count(),
            'jobsCount' => Job::count(),
        ];
        return view('admin.dashboard', $data);
    }
}
