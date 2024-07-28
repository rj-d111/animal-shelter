@extends('layouts/app')

@section('content')
    <section id="donation-images" class="container pt-60 select-none mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="w-full h-80 overflow-hidden">
                <img src="{{ asset('images/donate-1.jpg') }}" alt="Image 1" class="object-cover w-full h-full">
            </div>
            <div class="w-full h-80 overflow-hidden">
                <img src="{{ asset('images/donate-2.jpg') }}" alt="Image 2" class="object-cover w-full h-full">
            </div>
            <div class="w-full h-80 overflow-hidden">
                <img src="{{ asset('images/donate-3.jpg') }}" alt="Image 3" class="object-cover w-full h-full">
            </div>
            <div class="w-full h-80 overflow-hidden">
                <img src="{{ asset('images/donate-4.jpg') }}" alt="Image 4" class="object-cover w-full h-full">
            </div>
            <!-- Add more images as needed -->
        </div>
    </section>
    <div class="my-20">
        <h1 class="text-center text-pink-500 font-bold text-4xl">Make a Real Difference</h1>
        <p class="mt-4 text-center">Every contribution, big or small, helps us care for the animals at our shelter.</p>
    </div>

    <section id="donate">
        <div class="relative bg-cover bg-center h-[350vh] md:h-[200vh] lg:h-[140vh]" style="background-image: url('/images/dog-caring.jpg');">
            <div class="absolute inset-0 bg-blue-900 bg-opacity-50 flex flex-col items-center justify-center text-center p-4 lg:p-8">
                <h2 class="text-2xl lg:text-4xl font-bold text-white mb-4">Help us care for the amazing animals at our shelter by donating.</h2>
                <div class="container lg:px-10 mx-auto py-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        {{-- First Grid --}}
                        <div class="bg-white dark:bg-slate-950 rounded-lg p-6 flex flex-col items-center text-center">
                            <img src="{{asset('images/peso.svg')}}" alt="Donate Funds" class="mb-4">
                            <h1 class="text-pink-500 font-bold text-4xl mb-4">Donate Funds</h1>
                            <p class="mb-4">Your financial support allows us to purchase foods, medicine and other essentials for our furry friends in this shelter.</p>
                            <p class="mb-4">You can donate funds directly to our landbank account:</p>
                            <img src="{{asset('images/landbank.png')}}" alt="Landbank" class="mb-4">
                            <p class="font-bold mb-4">Wilma Evangelista <br>SA 3127 016 797</p>
                        </div>
                        {{-- Second Grid --}}
                        <div class="bg-white dark:bg-slate-950 rounded-lg p-6 flex flex-col items-center text-center">
                            <img src="{{asset('images/pet-food.svg')}}" alt="Donate Pet Supplies" class="mb-4">
                            <h1 class="text-pink-500 font-bold text-4xl mb-4">Donate Pet Supplies</h1>
                            <p class="mb-4">We're gratefully accepting donations of pet supplies such as pet food, leashes, food bowls, and even building materials like tarpaulin/lona/rope for shelter repairs.</p>
                            <p class="mb-4">You can set a schedule to drop off your donation or schedule a visit to donate in person.</p>
                            <p class="font-bold mb-4">Wilma Evangelista <br>SA 3127 016 797</p>
                            <a href="{{url('appointment')}}" class="px-6 py-3 bg-blue-700 text-white font-medium rounded-md hover:bg-blue-800">Set Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="helping-hand">
        <div class="my-20">
            <h1 class="text-center text-pink-500 font-bold text-4xl">Lend a helping hand at the San Pedro Animal Shelter!</h1>
            <h1 class="text-center text-gray-800 dark:text-pink-200 text-2xl">Volunteers are needed for cleaning the shelter and feeding the animals.</h1>
            <div class="my-10 text-center">
                <a href="#" class="px-20 py-3 bg-pink-500 font-medium rounded-md hover:bg-pink-700">Learn More</a>
            </div>
        </div>
    </section>    
@endsection
