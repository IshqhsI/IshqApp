@extends('layouts.main')
@section('content')
    <div class="hero mx-auto px-4 py-8 relative dark:bg-slate-950 dark:text-slate-300 bg-slate-300 text-slate-800"
        style=" overflow: hidden; min-height: calc(100vh - 68px);">
        <!-- Background elements -->
        <div class="absolute -left-14 w-24 h-24 bg-blue-700 rounded opacity-70 rotate-45"></div>
        <div class="absolute top-8 -right-20 w-36 h-36 bg-blue-600 opacity-60 rounded"></div>
        {{-- <div class="absolute -bottom-16 right-96 w-32 h-32 bg-blue-600 opacity-50 rounded-full"></div> --}}

        <section class="relative z-10 mx-auto flex flex-col items-center justify-center">
            <h2 class="text-4xl font-bold mb-8 lg:mb-12 text-center animate-fade-in">Projects</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center w-full max-w-7xl">
                <!-- E-commerce Platform Card -->
                <div
                    class="card bg-base-200 text-base-content shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 rounded-lg overflow-hidden">
                    <figure>
                        <img src="{{ asset('img/ecomm.png') }}" alt="E-commerce Platform" class="w-full h-48 object-contain">
                    </figure>
                    <div class="p-6">
                        <h3 class="card-title text-2xl font-semibold text-blue-700 mb-4">E-commerce Platform</h3>
                        <p class="text-base mb-4 text-justify">Developed a scalable backend for an e-commerce platform using
                            PHP
                            and MySQL, handling high-volume transactions and inventory management.</p>
                        <div class="flex justify-end">
                            <button
                                class="btn bg-blue-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-blue-600 transition-all">View
                                Details</button>
                        </div>
                    </div>
                </div>

                <!-- POS System Card -->
                <div
                    class="card bg-base-200 text-base-content shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 rounded-lg overflow-hidden">
                    <figure>
                        <img src="{{ asset('img/pos.png') }}" alt="POS System" class="w-full h-48 object-contain">
                    </figure>
                    <div class="p-6">
                        <h3 class="card-title text-2xl font-semibold text-blue-700 mb-4">POS System</h3>
                        <p class="text-base mb-4 text-justify">Developed a POS (Point of Sale) system to manage
                            transactions, inventory, and sales reports efficiently, using PHP and JavaScript.</p>
                        <div class="flex justify-end">
                            <button
                                class="btn bg-blue-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-blue-600 transition-all">View
                                Details</button>
                        </div>
                    </div>
                </div>

                <!-- Blog Project Card -->
                <div
                    class="card bg-base-200 text-base-content shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 rounded-lg overflow-hidden">
                    <figure>
                        <img src="{{ asset('img/blog.png') }}" alt="Blog Project" class="w-full h-48 object-contain">
                    </figure>
                    <div class="p-6">
                        <h3 class="card-title text-2xl font-semibold text-blue-700 mb-4">Personal Blog</h3>
                        <p class="text-base mb-4 text-justify">Developed a personal blog platform using Laravel and Vue.js,
                            featuring dynamic content, commenting, and SEO-friendly architecture.</p>
                        <div class="flex justify-end">
                            <button
                                class="btn bg-blue-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-blue-600 transition-all">View
                                Details</button>
                        </div>
                    </div>
                </div>

                <!-- Decision Support System for Road Repairs Card -->
                <div
                    class="card bg-base-200 text-base-content shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 rounded-lg overflow-hidden">
                    <figure>
                        <img src="{{ asset('img/dss.png') }}" alt="Decision Support System for Road Repairs"
                            class="w-full h-48 object-contain">
                    </figure>
                    <div class="p-6">
                        <h3 class="card-title text-2xl text-left font-semibold text-blue-700 mb-4">Decision Support System
                            for Road
                            Repairs</h3>
                        <p class="text-base mb-4 text-justify">Developed a decision support system to analyze road
                            conditions and prioritize repairs based on urgency, using GIS data and machine learning
                            algorithms.</p>
                        <div class="flex justify-end">
                            <button
                                class="btn bg-blue-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-blue-600 transition-all">View
                                Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
