<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Category;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Display FAQ pages
    public function index()
    {
        // all the faq questions and answers
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
        // validation of the faq question and answer
        $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        // 
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('faq.index');
    }
}