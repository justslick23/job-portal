<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

    public function create()
    {
        return view('jobseeker.company_form');
    }

    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'website' => 'nullable|url|max:255',
        'contact_number' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'industry' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'company_size' => 'required|string|max:255',
        'description' => 'nullable|string',
        'date_founded' => 'nullable|date',
        'logo' => 'required',

    ]);

    // Process the request data and store the company record
    // Handle file upload here if it exists
   // Process the request data and store the company record
// Handle file upload here if it exists
if ($request->hasFile('logo')) {
    $companyName = $request->input('name');
    $logoFile = $request->file('logo');
    $extension = $logoFile->getClientOriginalExtension();
    $fileName = $companyName . '.' . $extension;
    $logoPath = $logoFile->storeAs('logos/' . $companyName, $fileName, 'public');
}


    // Create a new company instance
    $company = new Company([
        'name' => $request->input('name'),
        'website' => $request->input('website'),
        'contact_number' => $request->input('contact_number'),
        'email' => $request->input('email'),
        'industry' => $request->input('industry'),
        'country' => $request->input('country'),
        'city' => $request->input('city'),
        'company_size' => $request->input('company_size'),
        'description' => $request->input('description'),
        'user_id' => auth()->user()->id,
        'date_founded' => $request->input('date_founded'),
    ]);

    // If logo file was uploaded, store its path in the company record
    if (isset($logoPath)) {
        $company->logo = $logoPath;
    }

    // Save the company record to the database
    $company->save();

    // Redirect with success message
    return redirect()->route('companies.create')->with('success', 'Company created successfully!');
}



 public function getCompaniesByUser() {
    $user = auth()->user();
    $companies = $user->companies;

    return view('jobseeker.companies', compact('companies'));
 }
}
