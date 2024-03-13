<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
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
}
