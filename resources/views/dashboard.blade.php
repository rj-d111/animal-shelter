@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="bg-gray-200 dark:bg-black">
    <div class="container mx-auto py-60">
        <h1 class="text-3xl font-bold text-pink-500 mb-6">Dashboard</h1>
    
        @if(session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif
    
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <!-- Welcome Card -->
                <div class="bg-white dark:bg-slate-900 p-10 rounded-lg shadow-md mb-6">
                    <h2 class="text-4xl font-bold">Welcome {{ $user->name }}!</h2>
                    <p class="text-gray-700 dark:text-slate-400 pt-4 text-lg">We're happy to see you here at San Pedro Animal Shelter</p>
                </div>
                <!-- Upcoming Appointment Card -->
                <div class="bg-white dark:bg-slate-900 p-10 rounded-lg shadow-md">
                    <div class="flex items-center mb-9">
                        <h3 class="text-4xl font-bold">Upcoming appointment details</h3>
                    </div>
                    <div class="flex items-center">
                        <i class="fa fa-calendar text-6xl mr-6"></i>
                        <div>
                            @if($nextAppointment)
                            <p class="text-xl mb-2">Your next appointment is for:</p>
                            <p class="font-bold text-pink-500">{{ $nextAppointment->datetime->format('F j, Y g:i a') }}</p>
                        @else
                            <p class="text-xl mb-2">No upcoming appointments</p>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- History Activities Card -->
            <div class="bg-white dark:bg-slate-900 p-6 rounded-lg shadow-md relative h-full flex flex-col">
                <h3 class="text-4xl text-center font-bold mb-auto">History Activities</h3>
                <button class="mt-auto mx-auto bg-pink-500 text-white py-2 px-4 rounded">View All</button>
            </div>
        </div>
    </div>
</div>
@endsection
