@extends('layouts.main')
@section('content')
    <div class="place-items-none lg:hero mx-auto px-4 py-8 relative dark:bg-slate-950 dark:text-slate-300 bg-slate-300 text-slate-800"
        style="min-height: calc(100vh - 68px); overflow: hidden;">
        <!-- Background elements -->
        <div class="absolute -left-14 w-24 h-24 bg-blue-700 rounded opacity-70 rotate-45"></div>
        <div class="absolute top-8 -right-20 w-36 h-36 bg-blue-600 opacity-60 rounded"></div>
        {{-- <div class="absolute -bottom-16 right-96 w-32 h-32 bg-blue-600 opacity-50 rounded-full"></div> --}}

        <!-- Skills Section -->
        <section class="relative z-10 lg:max-w-7xl">
            <h2 class="text-4xl font-bold mb-12 text-center animate-fade-in">Skills</h2>
            <!-- Office Tools -->
            {{-- <h3 class="text-2xl font-semibold mb-6 text-center">Office Tools</h3> --}}
            <div class="grid grid-cols md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
                <div
                    class="skill-card card bg-gradient-to-br from-blue-400 to-blue-600 text-white shadow-xl hover:shadow-2xl">
                    <div class="card-body items-center text-center">
                        <i class="fas fa-file-word text-4xl mb-4"></i>
                        <h3 class="card-title text-xl">Microsoft Word</h3>
                        <p class="text-sm mt-2">Document Processing</p>
                    </div>
                </div>
                <div
                    class="skill-card card bg-gradient-to-br from-green-400 to-green-600 text-white shadow-xl hover:shadow-2xl">
                    <div class="card-body items-center text-center">
                        <i class="fas fa-file-excel text-4xl mb-4"></i>
                        <h3 class="card-title text-xl">Microsoft Excel</h3>
                        <p class="text-sm mt-2">Data Analysis & Reporting</p>
                    </div>
                </div>
                <div
                    class="skill-card card bg-gradient-to-br from-blue-500 to-blue-700 text-white shadow-xl hover:shadow-2xl">
                    <div class="card-body items-center text-center">
                        <i class="fas fa-code text-4xl mb-4"></i>
                        <h3 class="card-title text-xl">PHP</h3>
                        <p class="text-sm mt-2">Backend Development</p>
                    </div>
                </div>
                <div
                    class="skill-card card bg-gradient-to-br from-yellow-500 to-yellow-700 text-white shadow-xl hover:shadow-2xl">
                    <div class="card-body items-center text-center">
                        <i class="fab fa-node-js text-4xl mb-4"></i>
                        <h3 class="card-title text-xl">Node.js</h3>
                        <p class="text-sm mt-2">Server-side JavaScript</p>
                    </div>
                </div>
                <div
                    class="skill-card card bg-gradient-to-br from-purple-500 to-purple-700 text-white shadow-xl hover:shadow-2xl">
                    <div class="card-body items-center text-center">
                        <i class="fas fa-database text-4xl mb-4"></i>
                        <h3 class="card-title text-xl">SQL</h3>
                        <p class="text-sm mt-2">Relational Databases</p>
                    </div>
                </div>
                <div
                    class="skill-card card bg-gradient-to-br from-orange-500 to-orange-700 text-white shadow-xl hover:shadow-2xl">
                    <div class="card-body items-center text-center">
                        <i class="fas fa-database text-4xl mb-4"></i>
                        <h3 class="card-title text-xl">MongoDB</h3>
                        <p class="text-sm mt-2">NoSQL Database</p>
                    </div>
                </div>
                <div
                    class="skill-card card bg-gradient-to-br from-red-500 to-red-700 text-white shadow-xl hover:shadow-2xl">
                    <div class="card-body items-center text-center">
                        <i class="fas fa-server text-4xl mb-4"></i>
                        <h3 class="card-title text-xl">RESTful APIs</h3>
                        <p class="text-sm mt-2">API Development</p>
                    </div>
                </div>
                <div
                    class="skill-card card bg-gradient-to-br from-pink-500 to-pink-700 text-white shadow-xl hover:shadow-2xl">
                    <div class="card-body items-center text-center">
                        <i class="fas fa-laptop-code text-4xl mb-4"></i>
                        <h3 class="card-title text-xl">Swagger/OpenAPI</h3>
                        <p class="text-sm mt-2">API Documentation</p>
                    </div>
                </div>
            </div>

            <!-- Programming Languages -->
            {{-- <h3 class="text-2xl font-semibold mb-6 text-center">Programming Languages</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
            </div> --}}

            <!-- Databases -->
            {{-- <h3 class="text-2xl font-semibold mb-6 text-center">Databases</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
            </div> --}}

            <!-- Web Technologies -->
            {{-- <h3 class="text-2xl font-semibold mb-6 text-center">Web Technologies</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
            </div> --}}

            <hr class="border-gray-300 mb-12">

        </section>

        <!-- Projects Section -->
        {{-- <section class="relative z-10">
            <h2 class="text-4xl font-bold mb-12 text-center animate-fade-in">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="card lg:card-side bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <figure><img src="https://placehold.co/600x400" alt="Project 1" /></figure>
                    <div class="card-body">
                        <h3 class="card-title text-blue-300">E-commerce Platform</h3>
                        <p>Developed a scalable backend for an e-commerce platform using PHP and MySQL, handling high-volume
                            transactions and inventory management.</p>
                        <div class="card-actions justify-end">
                            <button
                                class="btn btn-primary shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-110">View
                                Details</button>
                        </div>
                    </div>
                </div>
                <div
                    class="card lg:card-side bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <figure><img src="https://placehold.co/600x400" alt="Project 2" /></figure>
                    <div class="card-body">
                        <h3 class="card-title text-blue-300">Data Analytics API</h3>
                        <p>Created a robust API using Python and Flask for real-time data analytics, processing large
                            datasets and generating insightful reports.</p>
                        <div class="card-actions justify-end">
                            <button
                                class="btn btn-primary shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-110">View
                                Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>
@endsection
