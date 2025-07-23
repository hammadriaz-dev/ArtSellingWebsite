@extends('layouts.app')

@section('content')
    {{-- hero-section --}}

    <section class="bg-[#f8f6f3] dark:bg-[#0f0e0d] min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-6 py-16 items-center">

            <!-- Text Content -->
            <div class="space-y-6">
                <h1 class="text-5xl md:text-6xl font-bold leading-tight text-gray-900 dark:text-white">
                    Discover the Soul of Art
                </h1>
                <p class="text-lg md:text-xl text-gray-700 dark:text-gray-300 max-w-prose">
                    Explore original paintings, expressive prints, and captivating designs that speak directly to
                    the heart. Every piece tells a story.
                </p>
                <div class="flex gap-4">
                    <a href="#shop"
                        class="px-6 py-3 bg-black text-white text-sm uppercase tracking-wide rounded-md hover:bg-gray-800 transition">
                        Shop Now
                    </a>
                    <a href="#about"
                        class="px-6 py-3 border border-black text-black dark:text-white dark:border-white text-sm uppercase tracking-wide rounded-md hover:bg-black hover:text-white transition">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Hero Image -->
            <div>
                <img src="{{ asset('storage/' . $store_manage->hero_image) }}" alt="Expressive artwork"
                    class="rounded-3xl shadow-xl object-cover w-full h-[500px]" />
            </div>
        </div>
    </section>

    {{-- end-hero-section --}}

    {{-- cards --}}

    <section class="py-12 px-6 bg-[#f9f6f2] dark:bg-[#0f0f0f]">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-900 dark:text-white">Featured Artworks</h2>

            <div class="">
                <!-- Cards -->

               <livewire:cart-component :products="$products" />

            </div>
        </div>
    </section>



    {{-- end-cards --}}
@endsection
