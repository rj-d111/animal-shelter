@extends('layouts/app')

@section('title')
    About {{ $pet->name }}
@endsection

@section('content')
    <!-- Pet Details Section -->
    <section class="py-48">
        <div class="container mx-auto px-4 py-5">
            <a href="{{ url('adopt') }}" class="bg-white dark:bg-slate-900 text-lg py-2 px-8 rounded"><i
                    class="fa fa-arrow-left mr-2" aria-hidden="true"></i>
                Back</a>
        </div>
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 bg-white dark:bg-slate-900 p-8 rounded-lg shadow-lg">
                {{-- First Grid --}}
                <div class="flex justify-center items-center select-none">
                    <div class="w-48 h-48 md:w-96 md:h-96 rounded-full overflow-hidden">
                        <img src="{{ asset($pet->image_path) }}" alt="{{ $pet->name }}"
                            class="object-cover w-full h-full">
                    </div>
                </div>
                {{-- Second Grid --}}
                <div class="m-auto">
                    <h2 class="text-6xl font-bold text-red-500 mb-10">{{ $pet->name }}</h2>
                    <div class="leading-5">
                        <p class="text-lg mb-2"><span class="font-bold">Gender:</span> {{ ucfirst($pet->gender) }}</p>
                        <p class="text-lg mb-2"><span class="font-bold">Breed:</span> {{ $pet->breed }}</p>
                        <p class="text-lg mb-2"><span class="font-bold">Age:</span> {{ $pet->age }} years</p>
                        <p class="text-lg mb-2"><span class="font-bold">Color:</span> {{ ucfirst($pet->color) }}</p>
                        <p class="text-lg mb-4">{{ $pet->description }}</p>
                        <div class="text-end mt-10">
                            <a href="#" class="bg-pink-500 text-white text-lg py-2 px-8 rounded">Adoption Inquiry</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
