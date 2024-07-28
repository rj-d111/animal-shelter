@extends('layouts/app')

@section('title')
    Adopt Pets    
@endsection

@section('content')
        <!-- Adopt Section -->
        <section class="py-12 bg-cover bg-center" style="background-image: url('images/background.jpg');">
            <div class="container mx-auto px-4">
                <!-- Title -->
                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold text-white mb-2">Adopt, don't shop</h1>
                    <p class="text-lg text-white">These loving pets need a new home.</p>
                </div>
                <!-- Filter Buttons -->
                <div class="flex justify-center mb-8">
                    <button class="bg-red-500 text-white px-4 py-2 mx-2 rounded">All</button>
                    <button class="bg-white text-red-500 px-4 py-2 mx-2 rounded">Cats</button>
                    <button class="bg-white text-red-500 px-4 py-2 mx-2 rounded">Dogs</button>
                </div>
                <!-- Pet Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Pet Card -->
                    <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                        <img src="images/tali.jpg" alt="Tali" class="w-32 h-32 mx-auto rounded-full mb-4">
                        <h2 class="text-xl font-bold text-red-500 mb-2">Tali</h2>
                        <a href="#" class="bg-pink-500 text-white py-2 px-4 rounded">Learn About Me</a>
                    </div>
                    <!-- Pet Card -->
                    <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                        <img src="images/rocky.jpg" alt="Rocky" class="w-32 h-32 mx-auto rounded-full mb-4">
                        <h2 class="text-xl font-bold text-red-500 mb-2">Rocky</h2>
                        <a href="#" class="bg-pink-500 text-white py-2 px-4 rounded">Learn About Me</a>
                    </div>
                    <!-- Pet Card -->
                    <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                        <img src="images/munti.jpg" alt="Munti" class="w-32 h-32 mx-auto rounded-full mb-4">
                        <h2 class="text-xl font-bold text-red-500 mb-2">Munti</h2>
                        <a href="#" class="bg-pink-500 text-white py-2 px-4 rounded">Learn About Me</a>
                    </div>
                    <!-- Pet Card -->
                    <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                        <img src="images/uno.jpg" alt="Uno" class="w-32 h-32 mx-auto rounded-full mb-4">
                        <h2 class="text-xl font-bold text-red-500 mb-2">Uno</h2>
                        <a href="#" class="bg-pink-500 text-white py-2 px-4 rounded">Learn About Me</a>
                    </div>
                </div>
            </div>
        </section>
@endsection