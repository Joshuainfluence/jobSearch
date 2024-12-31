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
            'totalJobs' => Job::count(),
            'activeJobs' => Job::where('is_active', true)->count(),
            'totalApplications' => Application::count(),
            'recentApplications' => Application::with('job')
                ->latest()
                ->take(5)
                ->get(),
            'applicationChart' => [
                'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                'data' => Application::selectRaw('COUNT(*) as count, MONTH(created_at) as month')
                    ->whereYear('created_at', date('Y'))
                    ->groupBy('month')
                    ->pluck('count', 'month')
                    ->toArray()
            ]
        ];

        return view('admin.dashboard', $data);
    }
}
