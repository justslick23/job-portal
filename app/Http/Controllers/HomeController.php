<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.dashboard');
    }

    public function home()
    {

            // Dummy data for featured jobs
            $featuredJobs = [
                ['title' => 'Software Engineer', 'company' => 'ABC Tech Inc'],
                ['title' => 'Marketing Specialist', 'company' => 'XYZ Marketing Agency'],
                ['title' => 'Data Analyst', 'company' => 'Data Analytics Co'],
            ];
    
            // Dummy data for popular job categories
            $popularCategories = ['IT & Software', 'Marketing', 'Data Science', 'Finance', 'Engineering'];
    
            return view('pages.home', compact('featuredJobs', 'popularCategories'));
        }

}
