<x-layout>

    <div class="px-10">
        
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
        
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                </a>
            </div>

            <div>
                
                <div class="flex gap-10">

                    <x-nav-links href="">
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

        <main class="mt-10 max-w-[968px] mx-auto">

            <section class="mt-10">

                <div class="text-center py-8">
                    <h1 class="font-bold text-4xl mb-8">
                        Let's Find You A Great Job
                    </h1>


                        <x-forms.form action="/search">
                            
                            <x-forms.input 
                                :label="false"
                                placeholder="Web Developer..." 
                                type="search" 
                                name="q"/>

                        </x-forms.form>


                </div>


            </section>

        
            <section class="mt-10">
                <x-heading>
                    Featured Jobs
                </x-heading>


                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 ">
                    @foreach ($featuredJobs as $job)
                        <x-job-card :$job/>
                    @endforeach
                </div>

            </section>

            <section class="mt-10">

                <x-heading>
                    Tags
                </x-heading>

                <div class="flex space-x-2">
                    @foreach ($tags as $tag)
                        <x-card-tag :tag="$tag" size="text-sm"/>
                    @endforeach
                </div>

            </section>

            <section class="mt-10">

                <x-heading>
                    Find Jobs
                </x-heading>

                <div class="flex flex-col space-y-6">

                    @foreach ($jobs as $job)
                        <x-job-card-wide :$job/>
                    @endforeach

                </div>


            </section>
        
        </main>

    </div>

</x-layout>