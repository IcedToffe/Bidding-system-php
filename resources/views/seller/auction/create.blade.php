<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button
        type="submit"
        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
    >
        Log out
    </button>
</form>

           
<h1>Welcome to the User Dashboard, {{ Auth::user()->name }}</h1>
<p>Browse and purchase items here.</p>
