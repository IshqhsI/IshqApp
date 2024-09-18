<div class="navbar dark:bg-slate-900 dark:text-slate-300 bg-slate-200 text-slate-800">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[999] mt-3 w-52 p-2 shadow gap-2">
                <li><a href="{{ route('home') }}"
                        class=" normal-case active:bg-slate-300 @if (Route::currentRouteName() == 'home') active @endif">Home</a>
                </li>
                <li><a href="{{ route('skills') }}"
                        class="normal-case @if (Route::currentRouteName() == 'skills') active @endif">Skills</a></li>
                <li><a href="{{ route('projects') }}"
                        class=" normal-case @if (Route::currentRouteName() == 'projects') active @endif">Projects</a></li>
                <li><a href="{{ route('contact') }}"
                        class="normal-case @if (Route::currentRouteName() == 'contact') active @endif">Contact</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl normal-case">IshqCode</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 gap-2">
            <li><a href="{{ route('home') }}"
                    class="normal-case @if (Route::currentRouteName() == 'home') active @endif">Home</a></li>
            <li><a href="{{ route('skills') }}"
                    class="normal-case @if (Route::currentRouteName() == 'skills') active @endif">Skills</a></li>
            <li><a href="{{ route('projects') }}"
                    class="normal-case @if (Route::currentRouteName() == 'projects') active @endif">Projects</a></li>
            <li><a href="{{ route('contact') }}"
                    class="normal-case @if (Route::currentRouteName() == 'contact') active @endif">Contact</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <a class="btn btn-primary shadow-lg hover:shadow-2xl transition-all duration-300">Get Started</a>
    </div>
</div>
