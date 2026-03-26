<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\JobApplication;
use App\Models\Partnership;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'subject' => 'required|string|max:255',
            'type' => 'required|in:general,devis,cotation',
            'message' => 'required|string|max:5000',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.');
    }

    public function submitApplication(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'desired_position' => 'nullable|string|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'message' => 'nullable|string|max:5000',
            'job_offer_id' => 'nullable|exists:job_offers,id',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        JobApplication::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'desired_position' => $validated['desired_position'] ?? null,
            'cv_path' => $cvPath,
            'message' => $validated['message'] ?? null,
            'job_offer_id' => $validated['job_offer_id'] ?? null,
        ]);

        return back()->with('success', 'Votre candidature a été envoyée avec succès. Nous l\'examinerons attentivement.');
    }

    public function submitPartnership(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'nullable|string|max:30',
            'message' => 'nullable|string|max:5000',
        ]);

        Partnership::create($validated);

        return back()->with('success', 'Votre demande de partenariat a été envoyée avec succès.');
    }
}
