<h1>Index</h1>

<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
        <button class="btn btn-outline-primary"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></button>

        @if (Route::has('register'))
        <button class="btn btn-outline-primary"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></button>
        @endif
    @endauth
</div>