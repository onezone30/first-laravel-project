<x-layout>

    <div class="px-10">
        
        <x-nav />

        <main class="mt-10 max-w-[968px] mx-auto">

            <x-section>

                <div class="mb-6">
                    <x-title-heading>
                        Create A Job
                    </x-title-heading>
                </div>


                <x-forms.form method="POST" action="/jobs/create">

                    <x-forms.input label="Name" id="name" name="name"/>
                    <x-forms.input label="Salary" id="salary" name="salary"/>
                    <x-forms.input label="Location" id="location" name="location"/>
                    <x-forms.input label="Url" id="url" name="url"/>

                    <x-forms.select label="Schedule" name="schedule">
                        <option>Full Time</option>
                        <option>Part Time</option>
                    </x-forms.select>

                    <x-forms.checkbox label="Feature (Costs more)" name="featured" />
                    
                    <x-forms.divider/>

                    <x-forms.input label="Tags (comma separated)" id="tags" name="tags" placeholder="laracasts, video, education"/>

                    <div class="text-right mt-8">
                        <x-forms.button>
                            Create Job
                        </x-forms.button>    
                    </div>
                    
                </x-forms.form>

            </x-section>
        
        </main>

    </div>

</x-layout>