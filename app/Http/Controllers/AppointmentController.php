<?php
namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('appointment', ['user' => $user]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'datetime' => 'required|date',
            'reason' => 'required|string',
            'comments' => 'nullable|string',
            'visitors' => 'nullable|integer', // Validate visitors as nullable integer
        ]);

        $appointment = new Appointment();
        $appointment->user_id = Auth::id();
        $appointment->datetime = $request->datetime;
        $appointment->reason = $request->reason;
        $appointment->visitors = $request->input('visitors', 1); // Default to 1 if not provided
        $appointment->comments = $request->comments;
        $appointment->save();

        return redirect()->route('dashboard')->with('success', 'Appointment created successfully!');
    }
}
