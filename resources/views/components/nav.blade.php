<nav class="flex justify-between items-center py-4 border-b border-white/10">

    <div>
        <a href="/">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
        </a>
    </div>

    <div>
        
        <div class="flex gap-10">

            <x-nav-links href="/">
                Jobs
            </x-nav-links>
            <x-nav-links href="">
                Careers
            </x-nav-links>
            <x-nav-links href="">
                Salaries
            </x-nav-links>
            <x-nav-links href="">
                Companies
            </x-nav-links>
            
        </div>

    </div>
    
    <div>
        @auth
            <div class="space-x-6">

                <x-nav-links href="/jobs/create">
                    Post a Job
                </x-nav-links>
                <x-nav-links href="/logout">
                    Log Out
                </x-nav-links>

            </div>
        @endauth

        @guest
        <div class="space-x-6">

            <x-nav-links href="/login">
                Log In
            </x-nav-links>
            <x-nav-links href="/register">
                Register
            </x-nav-links>

        </div>

        @endguest
    </div>


</nav>