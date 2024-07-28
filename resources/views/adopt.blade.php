@extends('layouts/app')

@section('title')
    Adopt Pets
@endsection

@section('content')
    <!-- Adopt Section -->
    <section class="py-48 bg-cover bg-center bg-violet-600 dark:bg-black" x-data="petFilter()">
        <div class="container mx-auto px-4">
            <!-- Title -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-white mb-2">Adopt, don't shop</h1>
                <p class="text-lg text-white">These loving pets need a new home.</p>
            </div>
            <!-- Filter Buttons -->
            <div class="flex justify-between mb-8">
                <div>
                    <button :class="species === '' ? 'bg-red-500 text-white' : 'bg-white text-red-500'" @click="species = ''" class="px-4 py-2 mx-2 rounded">All</button>
                    <button :class="species === 'cat' ? 'bg-red-500 text-white' : 'bg-white text-red-500'" @click="species = 'cat'" class="px-4 py-2 mx-2 rounded">Cats</button>
                    <button :class="species === 'dog' ? 'bg-red-500 text-white' : 'bg-white text-red-500'" @click="species = 'dog'" class="px-4 py-2 mx-2 rounded">Dogs</button>
                </div>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <input type="text" placeholder="Search..."
                           class="border border-gray-300 dark:bg-slate-950 rounded-md px-3 py-2 pl-10 w-64"
                           x-model="search">
                </div>
            </div>
            
            <!-- Pet Cards Grid -->
            <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <template x-for="pet in filteredPets" :key="pet.id">
                    <div class="bg-white dark:bg-slate-950 p-4 rounded-lg shadow-lg text-center">
                        <div class="select-none">
                            <div class="w-40 h-40 mx-auto rounded-full overflow-hidden">
                                <img :src="'{{ asset('') }}' + pet.image_path" :alt="pet.name"
                                    class="object-cover w-full h-full">
                            </div>
                            <h2 class="text-xl font-bold text-red-500 my-3" x-text="pet.name"></h2>
                            <a :href="'{{ url('/adopt/') }}/' + pet.id" class="bg-pink-500 text-white py-2 px-4 rounded">Learn
                                About Me</a>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $pets->links() }}
            </div>
        </div>
    </section>

    <script>
        function petFilter() {
            return {
                pets: @json($pets->items()),
                species: '',
                search: '',
                currentPage: 1,
                lastPage: {{ $pets->lastPage() }},
                get filteredPets() {
                    return this.pets.filter(pet => {
                        return (this.species === '' || pet.species === this.species) &&
                            pet.name.toLowerCase().includes(this.search.toLowerCase());
                    });
                },
                nextPage() {
                    if (this.currentPage < this.lastPage) {
                        this.currentPage++;
                        this.fetchPets();
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.currentPage--;
                        this.fetchPets();
                    }
                },
                fetchPets() {
                    fetch(`{{ url('/adopt') }}?page=${this.currentPage}`)
                        .then(response => response.json())
                        .then(data => {
                            this.pets = data.data;
                            this.lastPage = data.last_page;
                        });
                }
            }
        }
    </script>
@endsection
