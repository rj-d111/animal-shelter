@extends('layouts/app')

@section('content')
    <div class="container py-60 mx-auto rounded-lg shadow-lg w-full">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-4/10 mb-4 md:mb-0 flex justify-center">
                <img src="{{ asset('images/william-dog.jpg') }}" alt="Wilma with dogs" class="md:w-3/4 lg:w-1/2 rounded-md">
            </div>
            <div class="p-0 sm:ps-10 md:w-6/10 md:pl-6 ">
                <h2 class="text-4xl font-bold mb-6">About Us</h2>
                <h3 class="text-lg font-semibold text-pink-500 mb-4">San Pedro Animal Shelter is a non-profit Animal Shelter
                    located at San Pedro Laguna and taken care of by Wilma Evangelista and other volunteers.
                </h3>
                <p class="mb-2 dark:text-slate-400">
                    Wilma Evangelista, the founder of the San Pedro Animal Shelter, has always had a love for animals.
                    Growing up in the province, she wasn't exposed to the harsh realities of animal cruelty. However, upon
                    moving to Manila, Wilma was deeply affected by the sight of abandoned pets.
                </p>
                <p class="mb-2 dark:text-slate-400">
                    Witnessing pets being neglected and even dumped in garbage, particularly in Tondo. This experience
                    sparked a passion within her to help these neglected pets. She began by adopting and rescuing pets in
                    need, ultimately leading her to establish the San Pedro Animal Shelter.
                </p>
            </div>
        </div>

    </div>

    <section id="learn-more"
        class="flex flex-col items-center justify-center mx-auto p-4 bg-pink-100 dark:bg-slate-950 rounded-lg shadow-lg">
        <h1 class="text-4xl text-pink-500 font-bold my-6">You can learn more about us!</h1>
        <iframe width="560" height="315"
            src="https://www.youtube.com/embed/ZXKhOicjQ_o?embeds_referring_euri=https%3A%2F%2Ftasteof-parisnotpares.my.canva.site%2F&source_ve_path=MjM4NTE"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen class="rounded-lg shadow-lg"></iframe>
    </section>

    <section id="animal-shelter-site" class="flex flex-col items-center justify-center mx-auto p-4 w-full">
        <div class="md:w-1/2 w-full flex flex-col items-center">
            <img src="{{ asset('images/san-pedro-site.jpg') }}" alt="San Pedro Animal Shelter Site" class="mx-auto">
            <div class="relative max-w-[180px] mx-auto -mt-16"> <!-- Adjust margin-top to fix the gap -->
                <img src="{{ asset('images/SPAS_logo.png') }}" alt="SPAS Logo" class="mx-auto">
            </div>
        </div>

        <h1 class="text-4xl text-pink-500 font-bold mt-8">Location</h1> <!-- Add margin-top to ensure spacing -->
        <p class="text-center">119 Narra Road<br>San Pedro City, Laguna</p>
    </section>

@endsection
