@extends('layouts.main')
@section('content')
    <div class="hero mx-auto px-4 py-8 relative block dark:bg-slate-950 dark:text-slate-300 bg-slate-300 text-slate-800"
        style=" overflow: hidden; min-height: calc(100vh - 68px);">
        <!-- Background elements -->
        <div class="absolute -left-14 w-24 h-24 bg-blue-700 rounded opacity-70 rotate-45"></div>
        <div class="absolute top-8 -right-20 w-36 h-36 bg-blue-600 opacity-60 rounded"></div>
        {{-- <div class="absolute -bottom-16 right-96 w-32 h-32 bg-blue-600 opacity-50 rounded-full"></div> --}}

        <section class="relative z-10">
            <h2 class="text-4xl font-bold mb-12 text-center animate-fade-in">Projects</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- E-commerce Platform Card -->
                <div
                    class="card bg-base-200 text-base-content  shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 rounded-lg overflow-hidden">
                    <figure><img src="{{ asset('img/ecomm.png') }}" alt="E-commerce Platform"
                            class="w-full h-72 object-contain"></figure>
                    <div class="p-6">
                        <h3 class="card-title text-2xl font-semibold text-blue-700 mb-4">E-commerce Platform</h3>
                        <p class="text-base mb-6 text-justify">Developed a scalable backend for an e-commerce platform
                            using PHP and MySQL, handling high-volume transactions and inventory management.</p>
                        <div class="flex justify-end">
                            <button
                                class="btn bg-blue-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-blue-600 transition-all">View
                                Details</button>
                        </div>
                    </div>
                </div>

                <!-- Data Analytics API Card -->
                <div
                    class="card bg-base-200 text-base-content shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 rounded-lg overflow-hidden">
                    <figure><img src="{{ asset('img/pos.png') }}" alt="Data Analytics API" class="w-full h-72 object-contain">
                    </figure>
                    <div class="p-6">
                        <h3 class="card-title text-2xl font-semibold text-blue-700 mb-4">Data Analytics API</h3>
                        <p class="text-base mb-6 text-justify">Created a robust API using Python and Flask for real-time
                            data analytics, processing large datasets and generating insightful reports.</p>
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
