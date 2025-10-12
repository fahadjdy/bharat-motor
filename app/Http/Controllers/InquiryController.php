<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name'        => 'required|string|max:100',
            'email'       => 'required|email|max:150',
            'mobile'      => 'required|digits:10',
            'description' => 'nullable|string|max:2000',
        ]);

        // Save to DB
        Inquiry::create($validated);

        // You can save to DB or send mail here
        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for contacting us! We will get back to you soon.'
        ]);
    }
}
