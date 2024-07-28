@extends('layouts/app')

@section('content')
    <div class="container mx-auto px-60 pt-60 pb-20">
        <h1 class="text-3xl font-bold text-pink-600">Become a volunteer and help us care for our rescued pets.</h1>
        <p class="text-gray-700 text-lg dark:text-slate-300 mt-2">Even if you can't adopt, you can be a hero by volunteering your
            time.<br>We have
            opportunities for everyone, no experience necessary!</p>
        <div class="mt-6 w-full mx-auto">
            <img src="{{ asset('images/volunteer.jpg') }}" alt="Volunteers working with animals" class="rounded-md shadow-md">
        </div>

        <div class="mt-4">
            <p class="text-gray-700 text-lg dark:text-slate-300">Our animal shelter relies on caring volunteers like you to give
                rescued pets the love
                and attention they need.</p>
        </div>

        <div class="my-6 text-center">
            <a href="#"
                class="bg-pink-600 text-2xl text-white font-bold py-2 px-4 rounded-lg hover:bg-pink-700 transition duration-300">Volunteer
                Now</a>
        </div>
    </div>

    <section id="#volunteer-steps">
        <div class="container mx-auto p-6">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-pink-600">How you can help?</h1>
            </div>

            <div x-data="volunteerSection()">
                <template x-for="section in sections" :key="section.id">
                    <div class="mt-6">
                        <div class="flex items-center justify-center space-x-4">
                            <div class="absolute left-1/4 text-9xl font-bold text-pink-600 select-none" x-text="section.number"></div>
                            <article class="relative h-[350px] md:h-[400px] w-[350px] bg-white drop-shadow-lg select-none">
                                <div
                                    class="absolute top-14 left-1/2 transform -translate-x-1/2 h-[200px] w-[200px] md:h-[250px] md:w-[250px] overflow-hidden">
                                    <img :src="section.image" class="object-cover w-full h-full" :alt="section.altText">
                                </div>
                                <div class="absolute bottom-0 right-0">
                                    <img src="{{ asset('images/SPAS_logo.png') }}" alt="San Pedro Animal Shelter"
                                        class="w-24 h-24">
                                </div>
                            </article>
                        </div>
                        <div class="text-center text-blue-600 dark:text-blue-300 mt-5" x-text="section.caption"></div>
                    </div>
                </template>
            </div>

            <section id="#so-much-more" class="my-10">
                <h1 class="text-3xl text-center font-bold text-pink-600">And so much more!</h1>
                <div class="my-10 text-center">
                    <a href="#"
                        class="bg-pink-600 text-2xl text-white font-bold py-2 px-4 rounded-lg hover:bg-pink-700 transition duration-300">Volunteer
                        Now</a>
                </div>
            </section>


    </section>

    <script>
        function volunteerSection() {
            return {
                sections: [
                    {
                        id: 1,
                        number: '1',
                        image: '{{ asset("images/volunteer-1.jpg") }}',
                        altText: 'Volunteers at an animal shelter',
                        caption: 'You can help us keep our shelter clean and welcoming.'
                    },
                    {
                        id: 2,
                        number: '2',
                        image: '{{ asset("images/volunteer-2.jpg") }}',
                        altText: 'Feeding animals at the shelter',
                        caption: 'You can help us feed our hungry friends and give them fresh water.'
                    },
                    {
                        id: 3,
                        number: '3',
                        image: '{{ asset("images/volunteer-3.jpg") }}',
                        altText: 'Relaxing bath of pets',
                        caption: 'You can give them relaxing bath to keep them calm.'
                    },
                    {
                        id: 4,
                        number: '4',
                        image: '{{ asset("images/volunteer-4.jpg") }}',
                        altText: 'Playing with rescue pets',
                        caption: 'You can play with the rescue pets in the shelter.'
                    }
                ]
            }
        }
    </script>
    
@endsection
