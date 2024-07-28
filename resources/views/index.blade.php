@extends('layouts/app')

@section('title')
    San Pedro Animal Shelter
@endsection



@section('content')
    <!-- Content Section -->
    <section class="pt-40 lg:pt-28">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <!-- Left Content -->
            <div class="container md:w-3/4 mx-auto px-10 text-center md:text-left mb-8 md:mb-0">
                <img src="images/SPAS_logo.png" alt="San Pedro Animal Shelter" class="h-16 mb-4 mx-auto md:mx-0">
                <h1 class="text-3xl md:text-5xl font-bold text-pink-500 mb-4">Welcome to San Pedro Animal Shelter</h1>
                <p class="text-gray-700 dark:text-slate-300 text-lg mb-4">From playful pups to cuddly cats, there's a perfect match for
                    everyone!</p>
                <p class="text-gray-700 dark:text-slate-300 text-lg mb-6">Meet our incredible adoptable pets waiting for their forever
                    families.</p>
                <a href="{{url('adopt')}}" class="bg-pink-500 text-white text-lg py-2 px-8 rounded">Adopt Pet</a>
            </div>
            <!-- Right Content -->
            <div class="flex justify-end">
                <img src="images/dog-main.png" alt="Dog" class="h-auto w-full max-w-md rounded-lg">
            </div>
        </div>
    </section>
    <section id="donate">
        <div class="relative bg-cover bg-center h-80"
            style="background-image: url('{{ asset('images/dog-caring.jpg') }}');">
            <div
                class="absolute inset-0 bg-blue-900 bg-opacity-50 flex flex-col items-center justify-center text-center p-4 lg:p-8">
                <h2 class="text-2xl lg:text-4xl font-bold text-white mb-4">Help fill empty bowls and wagging tails!</h2>
                <p class="text-white text-base lg:text-lg mb-6">Donate funds, supplies, or your time. Schedule a visit
                    today!</p>
                <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                    <a href="{{ url('appointment')}}" class="px-6 py-3 bg-blue-700 text-white font-medium rounded-md hover:bg-blue-800">Set
                        Appointment</a>
                    <a href="{{url('donate')}}"
                        class="px-6 py-3 bg-blue-700 text-white font-medium rounded-md hover:bg-blue-800">How to Donate</a>
                </div>

            </div>
        </div>
    </section>

    <section id="video">
        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex justify-center w-4/5 mx-auto">
                  <iframe
                    class="w-full h-[300px]"
                    src="https://www.youtube.com/embed/ZXKhOicjQ_o?embeds_referring_euri=https%3A%2F%2Ftasteof-parisnotpares.my.canva.site%F&source_ve_path=MjM4NTE"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-pocket"
                    allowfullscreen
                  ></iframe>
                </div>
              
                <div class="grid items-center">  <div class="text-center md:text-left">
                    <h2 class="text-3xl font-bold mb-2">Who We Are</h2>
                    <p class="my-4">San Pedro Animal Shelter is a non-profit Animal Shelter located at San Pedro Laguna
                      and taken care of by Wilma Evangelista and other volunteers.</p>
                    <a href="{{url('about')}}" class="bg-pink-500 text-white py-2 px-4 rounded">Learn More About Us</a>
                  </div>
                </div>
              </div>
        </div>
    </section>
@endsection

