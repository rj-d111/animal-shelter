@extends('layouts/app')

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
                    style="background-image: url('images/dog-appointment.jpg');">
                </div>
                <!-- Title and Description -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl md:text-4xl font-bold text-pink-500 mb-4">Set Appointment</h1>
                    <p class=" mb-2">Appointments are recommended to ensure a smooth visit
                        for everyone.</p>
                    <p class="">Walk-ins may be accommodated based on availability.</p>
                </div>
                <!-- Form -->
                <form
                    class="max-w-lg mx-auto bg-white  p-8 rounded-lg shadow-md dark:bg-slate-950">
                    <div class="mb-4">
                        <label for="name"
                            class="block  font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Name</label>
                        <input type="text" id="name" name="name"
                            class="dark:bg-slate-800 w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="email"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Email</label>
                        <input type="email" id="email" name="email"
                            class="dark:bg-slate-800 w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Phone
                            Number</label>
                        <input type="tel" id="phone" name="phone"
                            class="dark:bg-slate-800 w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="datetime"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Date
                            and Time of Preferred Visit</label>
                        <input type="datetime-local" id="datetime" name="datetime"
                            class="dark:bg-slate-800 w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="reason"
                            class="block font-bold mb-2 after:content-['\00a0*'] after:dark:text-red-400 after:text-red-600">Reason
                            for Appointment</label>
                        <select id="reason" name="reason" class="dark:bg-slate-800 w-full px-3 py-2 border rounded"
                            required>
                            <option value="visit">I just want to visit to spend time with the animals in the shelter
                            </option>
                            <option value="donate">I want to drop-off donations in person, and spend time with animals in
                                the shelter</option>
                            <option value="volunteer">I would like to do Volunteer work (Help to clean the shelter, feed
                                the animals, etc.)</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="comments" class="block font-bold mb-2">Comments / Questions</label>
                        <textarea id="comments" name="comments" rows="4" class="dark:bg-slate-800 w-full px-3 py-2 border rounded"></textarea>
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
                        unpredictable
                        environment. Animals may exhibit unexpected behaviors, including barking, jumping, scratching,
                        or biting. You assume all risk of injury or illness associated with your visit to the shelter.
                    </p>
                </section>
                <!-- Add other sections here -->

                <section class="mb-6">
                    <h2 class="text-lg font-semibold">Following Shelter Rules</h2>
                    <p class="dark:text-gray-400 text-gray-600">It is your responsibility to follow all staff instructions
                        and posted signage regarding animal interaction and general safety within the shelter.
                    </p>
                </section>

                <section class="mb-6">
                    <h2 class="text-lg font-semibold">Children</h2>
                    <p class="dark:text-gray-400 text-gray-600">Children must be accompanied by an adult at all times and
                        must be supervised closely around animals.
                    </p>
                </section>

                <section class="mb-6">
                    <h2 class="text-lg font-semibold">Medical Conditions</h2>
                    <p class="dark:text-gray-400 text-gray-600">If you have any medical conditions that could be
                        exacerbated by exposure to animals or allergens (dander, fur), please consider your own health and
                        safety before visiting the shelter.
                    </p>
                </section>

                <section class="mb-6">
                    <h2 class="text-lg font-semibold">Visitor Conduct</h2>
                    <p class="dark:text-gray-400 text-gray-600">We expect all visitors to treat our staff, volunteers, and
                        animals with
                        respect. Disruptive behavior will not be tolerated.</p>
                </section>
    </section>
@endsection
