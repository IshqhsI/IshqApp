@extends('layouts.main')
@section('content')
    <div class="hero relative dark:bg-slate-950 dark:text-slate-300 bg-slate-300 text-slate-800" id="main"
        style="min-height: calc(100vh - 68px); overflow: hidden;">
        <div class="hero-content flex-col lg:flex-row gap-8 lg:gap-20 items-center lg:items-start relative z-10">
            <div class="relative">
                {{-- <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp" --}}
                <img src="{{ asset('img/pasf.png') }}"
                    class="max-w-sm w-52 rounded-lg shadow-2xl w transition-transform duration-500 hover:scale-105 relative z-10"
                    alt="A visual placeholder" />
                <!-- Gradient overlay on the image -->
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-30 rounded-lg"></div>
            </div>

            <div class="">
                <!-- Animated Text -->
                <h1 class="text-5xl lg:text-6xl font-bold italic opacity-0 animate-fade-in-down delay-200">Hello,</h1>
                <h1 class="text-4xl lg:text-5xl font-bold mt-2 text-blue-300 opacity-0 animate-fade-in-up delay-500">I'm
                    Muhammad
                    Ridhwan</h1>
                <p
                    class="py-6 text-justify leading-relaxed text-base lg:text-lg opacity-0 animate-fade-in delay-700 selection:bg-fuchsia-300 selection:text-fuchsia-900">
                    As a Backend Developer, I focus on designing systems that are scalable and secure. With problem-solving
                    and logical thinking skills, I am committed to presenting innovative and efficient technology solutions.
                </p>
                {{-- <p class="py-6 text-justify leading-relaxed text-lg opacity-0 animate-fade-in delay-700 selection:bg-fuchsia-300 selection:text-fuchsia-900">
                        Sebagai Backend Developer, saya menciptakan solusi backend yang canggih dan efisien. Terampil dalam PHP, Python, dan JavaScript, saya membangun API handal dan mengelola database dengan presisi, memastikan performa aplikasi selalu optimal.
                    </p> --}}
                <button
                    class="btn btn-primary shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-110">
                    Get Started
                </button>
            </div>
        </div>

        <div class="absolute -left-14 w-24 h-24 bg-blue-700 rounded opacity-70 rotate-45"></div>
        <div class="absolute top-8 -right-20 w-36 h-36 bg-blue-600 opacity-60 rounded"></div>
        <div class="absolute -bottom-16 right-96 w-32 h-32 bg-blue-600 opacity-50 rounded-full"></div>
    </div>
@endsection
