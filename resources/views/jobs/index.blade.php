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
                    Featured Jobs
                </x-heading>


                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 ">
                    @foreach ($featuredJobs as $job)
                        <x-job-card :$job/>
                    @endforeach
                </div>

            </x-section>

            <x-section>

                <x-heading>
                    Tags
                </x-heading>

                <div class="flex space-x-2">
                    @foreach ($tags as $tag)
                        <x-card-tag :tag="$tag" size="text-sm"/>
                    @endforeach
                </div>

            </x-section>

            <x-section>

                <x-heading>
                    Find Jobs
                </x-heading>

                <div class="flex flex-col space-y-6">

                    @foreach ($jobs as $job)
                        <x-job-card-wide :$job/>
                    @endforeach

                </div>


            </x-section>
        
        </main>

    </div>

</x-layout>