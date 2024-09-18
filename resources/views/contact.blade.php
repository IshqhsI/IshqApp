@extends('layouts.main')

@section('content')
   <div class="hero mx-auto px-4 py-8 relative dark:bg-slate-950 dark:text-slate-300 bg-slate-300 text-slate-800 place-items-start"
     style="overflow: hidden; min-height: calc(100vh - 68px);">
    <!-- Background elements -->
    <div class="absolute -left-14 w-24 h-24 bg-blue-700 rounded opacity-70 rotate-45"></div>
    <div class="absolute top-8 -right-20 w-36 h-36 bg-blue-600 opacity-60 rounded"></div>
    <div class="absolute -bottom-16 right-96 w-32 h-32 bg-blue-600 opacity-50 rounded-full"></div>

    <div class="w-full mx-auto py-12 relative">
        <div>
            <h2 class="text-4xl font-bold mb-4 text-center animate-fade-in">Contact Me</h2>
            <p class="mt-2 text-center text-xl text-blue-800 dark:text-blue-200">
                Let's connect and create something amazing together!
            </p>
        </div>
        <div class="mt-8 flex flex-wrap mx-auto gap-6 items-center justify-center">
            <!-- Email -->
            {{-- <div class="py-4 bg-blue-700 shadow-2xl sm:rounded-lg rounded w-1/3">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-white">
                        Email
                    </h3>
                    <div class="mt-2 max-w-xl text-sm text-blue-100">
                        <p>Feel free to reach out anytime.</p>
                    </div>
                    <div class="mt-3 text-sm">
                        <a href="mailto:me@muhammadridhwan.com"
                           class="font-medium text-blue-300 hover:text-blue-100 transition duration-150 ease-in-out">
                            me@muhammadridhwan.com
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </div> --}}

            <!-- Email -->
            <div class="py-4 bg-gradient-to-r from-purple-600 to-blue-500 shadow-2xl sm:rounded-lg rounded w-full lg:w-1/3">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-white">
                        Email
                    </h3>
                    <div class="mt-2 max-w-xl text-sm text-blue-100">
                        <p>Feel free to reach out anytime.</p>
                    </div>
                    <div class="mt-3 text-sm">
                       <a href="mailto:me@muhammadridhwan.com"
                           class="font-medium text-blue-300 hover:text-blue-100 transition duration-150 ease-in-out">
                            me@muhammadridhwan.com
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Instagram -->
            <div class="py-4 bg-gradient-to-r from-purple-600 to-pink-500 shadow-2xl sm:rounded-lg rounded w-full lg:w-1/3">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-white">
                        Instagram
                    </h3>
                    <div class="mt-2 max-w-xl text-sm text-blue-100">
                        <p>Follow me for updates and inspirations.</p>
                    </div>
                    <div class="mt-3 text-sm">
                        <a href="https://instagram.com/ridh_one18"
                           class="font-medium text-blue-300 hover:text-blue-100 transition duration-150 ease-in-out">
                            @ridh_one18
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Facebook -->
            <div class="py-4 bg-gradient-to-r from-blue-600 to-blue-400 shadow-2xl sm:rounded-lg rounded w-full lg:w-1/3">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-white">
                        Facebook
                    </h3>
                    <div class="mt-2 max-w-xl text-sm text-blue-100">
                        <p>Connect with me on Facebook.</p>
                    </div>
                    <div class="mt-3 text-sm">
                        <a href="https://www.facebook.com/ridhwan.ungung/"
                           class="font-medium text-blue-300 hover:text-blue-100 transition duration-150 ease-in-out">
                            Muhammad Ridhwan
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- LinkedIn -->
            <div class="py-4 bg-gradient-to-r from-blue-800 to-blue-600 shadow-2xl sm:rounded-lg rounded w-full lg:w-1/3">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-white">
                        LinkedIn
                    </h3>
                    <div class="mt-2 max-w-xl text-sm text-blue-100">
                        <p>Let's connect professionally.</p>
                    </div>
                    <div class="mt-3 text-sm">
                        <a href="https://www.linkedin.com/in/muhammad-ridhwan-76b084217"
                           class="font-medium text-blue-300 hover:text-blue-100 transition duration-150 ease-in-out">
                            Muhammad Ridhwan
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
