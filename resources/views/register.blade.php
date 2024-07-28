@extends('layouts/app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center pt-[calc(8rem+64px)] pb-8"
        style="background-image: url('{{ asset('images/login-background.png') }}');">
        <div
            class="container text-gray-600 dark:text-slate-300 bg-white dark:bg-slate-950 bg-opacity-50 grid grid-cols-1 gap-y-5 lg:grid-cols-2 w-full py-10 rounded-lg">
            <div class="sm:px-10 mx-auto px-3 flex flex-col items-center justify-center">
                <div class="text-center mb-6">
                    <img src="{{ asset('images/InnoPetCareLogo.png') }}" class="dark:invert sm:max-w-[300px] mx-auto"
                        alt="InnoPetCare Logo">
                    <p class="mt-5">InnoPetCare is a content management system (CMS) designed specifically for veterinary
                        clinics and animal shelters to manage their online presence.</p>
                </div>
            </div>
            <div class="sm:w-4/5 px-3 mx-auto">
                <h1 class="font-medium text-lg md:text-2xl text-yellow-600">Welcome! Let's create your new account</h1>
                <p>Let's have an adventure together with your pets</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="my-6" action="{{ route('register.submit') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Pet
                            Owner Name</label>
                        <input type="text" id="name" name="name" placeholder="Full Name"
                            class="dark:bg-slate-800 w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="email"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="dark:bg-slate-800 w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Contact
                            No.</label>
                        <input type="tel" id="phone" name="phone" placeholder="Contact No."
                            class="dark:bg-slate-800 w-full px-3 py-2 border rounded" required>
                    </div>
                    <label for="password"
                        class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Password</label>
                    <div class="mb-4 relative">
                        <input id="password" type="password" name="password" placeholder="Password"
                            class="dark:bg-slate-800 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-yellow-600 pr-10"
                            required>
                        <button type="button" id="toggle-password"
                            class="absolute inset-y-0 right-0 px-3 flex items-center">
                            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-.474 1.528-1.314 2.88-2.395 3.956M15 12a3 3 00-6 0m6 0a3 3 01-6 0M12 19c-4.478 0-8.268-2.943-9.542-7C4.732 7.943 8.522 5 12 5c1.126 0 2.204.204 3.206.578" />
                            </svg>
                        </button>
                    </div>
                    <div class="mb-4">
                        <label for="confirm"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Confirm
                            Password</label>
                        <input type="password" id="confirm" name="password_confirmation" placeholder="Confirm Password"
                            class="dark:bg-slate-800 w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="flex items-center justify-center mb-4">
                        <a href="{{ url('login') }}" class="text-sm text-yellow-600 hover:underline">Already Registered?
                            Login</a>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-2 text-white bg-yellow-600 rounded-md hover:bg-yellow-700 focus:outline-none focus:bg-yellow-700">Register</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    {{-- Password Toggle --}}
    <script>
        const togglePasswordButton = document.getElementById('toggle-password');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

        togglePasswordButton.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            // Toggle eye icon
            if (type === 'password') {
                eyeIcon.setAttribute('d',
                    'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-.474 1.528-1.314 2.88-2.395 3.956M15 12a3 3 0 00-6 0m6 0a3 3 0 01-6 0M12 19c-4.478 0-8.268-2.943-9.542-7C4.732 7.943 8.522 5 12 5c1.126 0 2.204.204 3.206.578'
                );
            } else {
                eyeIcon.setAttribute('d',
                    'M15 12a3 3 0 00-6 0m6 0a3 3 0 01-6 0M12 19c-4.478 0-8.268-2.943-9.542-7C4.732 7.943 8.522 5 12 5c4.478 0 8.268 2.943 9.542 7-.474 1.528-1.314 2.88-2.395 3.956'
                );
            }
        });
    </script>
@endsection
