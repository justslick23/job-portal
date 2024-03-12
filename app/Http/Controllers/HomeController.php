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
                [
                    'company_logo' => 'path/to/company1_logo.jpg',
                    'title' => 'Software Engineer',
                    'location' => 'New York, NY',
                    'salary' => '$80,000 - $100,000',
                    'type' => 'Fulltime',
                ],
                [
                    'company_logo' => 'path/to/company2_logo.jpg',
                    'title' => 'Web Developer',
                    'location' => 'San Francisco, CA',
                    'salary' => '$70,000 - $90,000',
                    'type' => 'Freelance',
                ],
                [
                    'company_logo' => 'path/to/company3_logo.jpg',
                    'title' => 'Data Scientist',
                    'location' => 'Los Angeles, CA',
                    'salary' => '$90,000 - $120,000',
                    'type' => 'Fulltime',
                ],
                [
                    'company_logo' => 'path/to/company4_logo.jpg',
                    'title' => 'UI/UX Designer',
                    'location' => 'Chicago, IL',
                    'salary' => '$75,000 - $95,000',
                    'type' => 'Freelance',
                ],
            ];
            
    
            // Dummy data for popular job categories
            $popularCategories = ['IT & Software', 'Marketing', 'Data Science', 'Finance', 'Engineering'];
    
            return view('pages.home', compact('featuredJobs', 'popularCategories'));
        }

}
