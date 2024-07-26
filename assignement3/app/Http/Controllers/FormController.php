<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FormDataRepositoryInterface;

class FormController extends Controller
{
    protected $formDataRepository;

    public function __construct(FormDataRepositoryInterface $formDataRepository)
    {
        $this->formDataRepository = $formDataRepository;
    }

    public function handleSubmit(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:form_data'],
            'gender' => 'required|in:M,F',
            'subscribe' => 'nullable|boolean',
        ]);

        $this->formDataRepository->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'gender' => $validated['gender'],
            'subscribe' => $validated['subscribe'] ?? false,
        ]);

        return redirect()->route('dashboard')->with('message', 'Form submitted successfully!');
    }
}
