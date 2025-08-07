<x-layout>

    <div class="px-10">
        
        <x-nav />

        <main class="mt-10 max-w-[968px] mx-auto">

            <x-section>

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


            </x-section>

        
            <x-section>
                <x-heading>
                    Results
                </x-heading>


                <div class="space-y-6">
                    @foreach ($jobs as $job)
                        <x-job-card-wide :$job/>
                    @endforeach
                </div>

            </x-section>

        
        </main>

    </div>

</x-layout>