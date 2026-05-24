<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Display FAQ pages
    public function index()
    {
        // Retrieve all FAQ questions directly
        $faqs = Faq::all();
        return view('faq.index', compact('faqs'));
    }

    // Creation form (Admin only)
    public function create()
    {
        return view('faq.create');
    }

    // Save/Store action (Admin only)
    public function store(Request $request)
    {
        // Validate only the question and the answer
        $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        // Save only the question and the answer without forcing any category ID
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('faq.index');
    }
}