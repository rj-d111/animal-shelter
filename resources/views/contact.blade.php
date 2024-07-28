@extends('layouts/app')

@section('content')
    <div class="container py-60 mx-auto rounded-lg shadow-lg w-full">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 mb-4 md:mb-0 flex justify-center">
                <img src="/images/fur-kiddo.jpg" alt="Fur Kiddo" class="md:w-3/4 lg:w-1/2 rounded-md">
            </div>
            <div class="p-0 sm:ps-10 md:w-1/2 md:pl-6 leading-10">
                <h2 class="text-4xl font-bold mb-2">San Pedro Animal Shelter</h2>
                <h3 class="text-3xl font-semibold text-pink-500 mb-4">Contact Us</h3>
                <p class="mb-2">
                    <a href="" class="flex items-center space-x-2">
                        <span class="w-8 h-8 p-2 rounded-full border-2 flex items-center justify-center">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                        <span class="text-pink-600">119 Narra Road, San Pedro City, Laguna</span>
                    </a>
                </p>
                <p class="mb-2">
                    <a href="mailto:wilmaevangelista029@gmail.com" class="flex items-center space-x-2">
                        <span class="w-8 h-8 p-2 rounded-full border-2 flex items-center justify-center">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <span class="text-pink-600">wilmaevangelista029@gmail.com</span>
                    </a>
                </p>
                <p class="mb-2">
                    <a href="https://facebook.com/sanpedrominianimalshelter" class="flex items-center space-x-2">
                        <span class="w-8 h-8 p-2 rounded-full border-2 flex items-center justify-center">
                            <i class="fa fa-facebook"></i>
                        </span>
                        <span class="text-pink-600">San Pedro Animal Shelter</span>
                    </a>
                </p>
                <p class="mb-2">
                    <a href="https://facebook.com/wilma.evangelista.357" class="flex items-center space-x-2">
                        <span class="w-8 h-8 p-2 rounded-full border-2 flex items-center justify-center">
                            <i class="fa fa-facebook"></i>
                        </span>
                        <span class="text-pink-600">Wilma Evangelista</span>
                    </a>
                </p>
            </div>
        </div>

    </div>
    <!-- Font Awesome Script -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
