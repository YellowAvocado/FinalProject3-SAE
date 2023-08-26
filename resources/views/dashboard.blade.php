<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-amber-600 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12 flex flex-col">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex gap-6">
                        <img class="w-2/6 m-10" src="https://images.unsplash.com/flagged/photo-1594170954639-ff95b015b546?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1965&q=80" alt="self photo">
                        <div class="m-5">
                            <h2 class="m-10 text-amber-600 font-bold text-xl" >About </h2>
                            <p class="m-5">A seasoned graphic designer fluent in the language of visuals, adept at translating ideas into compelling designs that resonate with diverse audiences. An innovative thinker who approaches design challenges with creativity and strategy, delivering solutions that go beyond aesthetics.  A strategic storyteller who crafts captivating narratives through visuals, leveraging design to communicate messages that leave a lasting impact. With a keen eye for detail, I meticulously refine each element, ensuring that every design is polished to perfection.</p>

                            <div>
                                <p class="ml-5">phone: +381 64 9876543</p>
                                <p class="ml-5">email: hepl@portfolio.com</p>
                                <p class="ml-5">location: Str. Imagination 32, Los Angeles CA</p>
                            </div>

                            <div class="mt-20 ml-5"><p><a class="text-amber-600" href="{{route('projects.index')}}">Start exploring...</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
