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

            <section class="mt-10 mb-8">

                <div class="mb-6">
                    <x-title-heading>
                        Register
                    </x-title-heading>
                </div>


                <x-forms.form method="POST" action="/register" enctype="multipart/form-data">

                    <x-forms.input label="Name" id="name" name="name"/>
                    <x-forms.input label="Email" id="email" name="email" type="email"/>
                    <x-forms.input label="Password" id="password" name="password" type="password"/>
                    <x-forms.input label="Confirm Password" id="password_confirmation" name="password_confirmation" type="password"/>

                    <x-forms.divider/>

                    <x-forms.input label="Employer Name" id="name" name="name"/>
                    <x-forms.input label="Employer Logo" id="logo" name="logo" type="file"/>

                    <x-forms.divider/>

                    <div class="text-right mt-8">
                        <x-forms.button>
                            Register User
                        </x-forms.button>    
                    </div>
                    

                </x-forms.form>

            </section>
        
        </main>

    </div>

</x-layout>