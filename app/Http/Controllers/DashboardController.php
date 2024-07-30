<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $nextAppointment = Appointment::where('user_id', $user->id)
                            ->where('datetime', '>', now())
                            ->orderBy('datetime', 'asc')
                            ->first();

        return view('dashboard', [
            'user' => $user,
            'nextAppointment' => $nextAppointment,
        ]);
    }
}