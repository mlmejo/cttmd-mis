<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TicketController extends Controller
{
    public function index(): View
    {
        return view('tickets.index');
    }

    public function create(): View
    {
        return view('tickets.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // Violator Information
            'first_name' => ['required', 'string'],
            'middle_name' => ['nullable', 'string'],
            'last_name' => ['required', 'string'],
            'suffix' => ['nullable', 'string'],
            'address' => ['required', 'string'],

            // Ticket Information
            'ticket_number' => ['required', 'string'],
            'violation_type' => ['required', 'string'],
            'location' => ['required', 'string'],
            'issued_at' => ['required', 'datetime'],
            'apprehended_by' => ['required', 'string'],
            'due_at' => ['required', 'date'],
            'amount' => ['nullable', 'numeric'],
        ]);

        return redirect(route('tickets.index'));
    }
}
