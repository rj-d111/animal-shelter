<footer class="bg-blue-600 py-8">
    <div class="container mx-auto px-4">
        <!-- Top Section -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-8">
            <div class="flex flex-col items-center md:items-start mb-4 md:mb-0">
                <img src="images/SPAS_logo.png" alt="San Pedro Animal Shelter" class="h-16 mb-4">
                <p class="text-center md:text-left">San Pedro Animal Shelter</p>
                <p class="text-center md:text-left">119 Narra Road<br>San Pedro City, Laguna</p>
                <div class="flex items-center justify-center md:justify-start">
                    <a href="#" class="hover:text-gray-700">
                        <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.406.593 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.892-4.787 4.655-4.787 1.325 0 2.465.099 2.797.143v3.24l-1.918.001c-1.504 0-1.795.714-1.795 1.76v2.308h3.588l-.467 3.622h-3.121V24h6.116c.729 0 1.324-.593 1.324-1.325V1.325C24 .593 23.406 0 22.675 0z" />
                        </svg>
                    </a>
                    <span class="ml-2">Follow us!</span>
                </div>
            </div>
            <div class="text-center md:text-left">
                <ul class="flex flex-wrap justify-center md:justify-start space-x-4">
                    <li><a href="#" class="dark:hover:text-pink-400 hover:text-gray-700">Home</a></li>
                    <li><a href="#" class="dark:hover:text-pink-400 hover:text-gray-700">About Us</a></li>
                    <li><a href="#" class="dark:hover:text-pink-400 hover:text-gray-700">Adopt</a></li>
                    <li><a href="#" class="dark:hover:text-pink-400 hover:text-gray-700">Donation</a></li>
                    <li><a href="#" class="dark:hover:text-pink-400 hover:text-gray-700">Volunteer</a></li>
                    <li><a href="#" class="dark:hover:text-pink-400 hover:text-gray-700">Appointments</a></li>
                    <li><a href="#" class="dark:hover:text-pink-400 hover:text-gray-700">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <!-- Divider -->
        <div class="border-t border-black py-4">
            <ul
                class="flex flex-col md:flex-row justify-center md:justify-between items-center space-y-2 md:space-y-0 md:space-x-4">
                <li><a href="{{url('login')}}" class="dark:hover:text-pink-400 hover:text-gray-700">Sign in</a></li>
                <li><a href="{{url('register')}}" class="dark:hover:text-pink-400 hover:text-gray-700">Register</a></li>
                <li><a href="{{url('reset-password')}}" class="dark:hover:text-pink-400 hover:text-gray-700">Reset Password</a></li>
                <li><a href="{{url('help')}}" class="dark:hover:text-pink-400 hover:text-gray-700">Help</a></li>
            </ul>
        </div>
        <!-- Bottom Section -->
        <div class="flex flex-col md:flex-row justify-between items-center py-4">
            <div class="text-center md:text-left">
                <span>Built with </span>
                <img src="images/InnoPetCarelogo.png" alt="Inno Pet Care" class="h-6 inline dark:invert">
            </div>
            <div class="text-center md:text-right">
                <p>Copyright © 2024 InnoVetCare, All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>