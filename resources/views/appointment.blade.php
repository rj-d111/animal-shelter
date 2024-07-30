@extends('layouts.app')

@section('title')
    Appointment
@endsection

@section('content')
    <section class="pt-40 bg-pink-50 dark:bg-black text-gray-700 dark:text-white">
        <!-- Appointment Section -->
        <section class="py-8">
            <div class="container mx-auto px-4">
                <!-- Image -->
                <div class="relative md:w-1/3 mx-auto bg-cover bg-center h-80"
                    style="background-image: url('{{ asset('images/dog-appointment.jpg') }}');">
                </div>
                <!-- Title and Description -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl md:text-4xl font-bold text-pink-500 mb-4">Set Appointment</h1>
                    <p class=" mb-2">Appointments are recommended to ensure a smooth visit for everyone.</p>
                    <p class="">Walk-ins may be accommodated based on availability.</p>
                </div>
                <!-- Form -->
                <form action="{{ route('appointment.store') }}" method="POST"
                    class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md dark:bg-slate-950">
                    @csrf
                    <div class="mb-4">
                        <label for="datetime"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Date
                            and Time of Preferred Visit</label>
                        <div class="relative">
                            <input type="datetime-local" id="datetime" name="datetime"
                                class="dark:bg-slate-800 w-full px-3 py-2 border rounded appearance-none" required>
                            <i
                                class="hidden dark:block fa fa-calendar absolute top-1/2 right-3 -translate-y-1/2 text-gray-400 dark:text-white"></i>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="reason"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Reason
                            for Appointment</label>
                        <input type="radio" id="visit" name="reason" value="visit" required>
                        <label for="visit">I just want to visit to spend time with the animals in the
                            shelter</label><br>
                        <input type="radio" id="donate" name="reason" value="donate" required>
                        <label for="donate">I want to drop-off donations in person, and spend time with animals in the
                            shelter</label><br>
                        <input type="radio" id="volunteer" name="reason" value="volunteer" required>
                        <label for="volunteer">I would like to do Volunteer work (Help to clean the shelter, feed the
                            animals, etc.)</label>
                    </div>
                    <div class="mb-4" x-data="{ numberOfPeople: 1 }">
                        <label for="numberOfPeople"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Total
                            Number of People Visiting</label>
                        <input type="number" id="numberOfPeople" name="numberOfPeople" x-model="numberOfPeople"
                            min="1" @input="numberOfPeople = Math.max(1, $event.target.value)"
                            class="dark:bg-slate-800 w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-6">
                        <label for="comments" class="block font-bold mb-2">Comments / Questions</label>
                        <textarea id="comments" name="comments" rows="4" class="dark:bg-slate-800 w-full px-3 py-2 border rounded"></textarea>
                    </div>
                    <div class="mb-4">
                        <p>By completing and submitting this form you agree to the following <a href="#terms"
                                class="text-blue-500">Terms & Conditions</a> and carefully read and understand the <a
                                href="#" class="text-blue-500">Shelter's Liability Waiver</a>.</p>
                    </div>
                    <div class="mb-4">
                        <input type="checkbox" id="agree" name="agree" required>
                        <label for="agree">Yes, I agree</label>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-pink-500 text-white py-2 px-4 rounded">Submit</button>
                    </div>
                </form>

            </div>
        </section>
    </section>

    <section id="terms">
        <div class="dark:bg-slate-900">
            <div class="max-w-2xl mx-auto p-5">
                <h1 class="text-3xl font-semibold mb-4 text-pink-400 text-center">Animal Shelter Visit Terms and Conditions
                </h1>
                <section class="my-6">
                    <h2 class="text-lg font-semibold">Animal Shelter Environment</h2>
                    <p class="dark:text-gray-400 text-gray-600">You acknowledge that an animal shelter can be an
                        unpredictable environment. Animals may exhibit unexpected behaviors, including barking, jumping,
                        scratching, or biting. You assume all risk of injury or illness associated with your visit to the
                        shelter.</p>
                </section>
                <section class="mb-6">
                    <h2 class="text-lg font-semibold">Following Shelter Rules</h2>
                    <p class="dark:text-gray-400 text-gray-600">It is your responsibility to follow all staff instructions
                        and posted signage regarding animal interaction and general safety within the shelter.</p>
                </section>
                <section class="mb-6">
                    <h2 class="text-lg font-semibold">Children</h2>
                    <p class="dark:text-gray-400 text-gray-600">Children must be accompanied by an adult at all times and
                        must be supervised closely around animals.</p>
                </section>
                <section class="mb-6">
                    <h2 class="text-lg font-semibold">Medical Conditions</h2>
                    <p class="dark:text-gray-400 text-gray-600">If you have any medical conditions that could be exacerbated
                        by exposure to animals or allergens (dander, fur), please consider your own health and safety before
                        visiting the shelter.</p>
                </section>
                <section class="mb-6">
                    <h2 class="text-lg font-semibold">Visitor Conduct</h2>
                    <p class="dark:text-gray-400 text-gray-600">We expect all visitors to treat our staff, volunteers, and
                        animals with respect. Disruptive behavior will not be tolerated.</p>
                </section>
            </div>
        </div>
    </section>
@endsection
