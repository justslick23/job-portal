<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function dashboard() {

        if (auth()->user()->role == "jobseeker") {
            return view('jobseeker.dashboard');
        }
    }

    public function getCompaniesByUser() {
        $user = auth()->user();
        // $companies = $user->companies;
         // Dummy data for companies
         $companies = [
            (object) [
                'name' => 'Company A',
                'website' => 'www.companyA.com',
                'email' => 'info@companyA.com',
                // Add more properties as needed
            ],
            (object) [
                'name' => 'Company B',
                'website' => 'www.companyB.com',
                'email' => 'info@companyB.com',
                // Add more properties as needed
            ],
            // Add more dummy companies as needed
        ];
        return view('pages.companies', compact('companies'));
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
