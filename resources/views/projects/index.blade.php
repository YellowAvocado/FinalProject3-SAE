<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid">
                <div class="grid gap-4 justify-between">
                    @foreach($projects as $project)
                        <div class="bg-white bg-clip-border text-gray-700" >
                            <div class="m-0 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none">
                                <img src="{{ $project->image }}">
                            </div>
                            <div class="p-6">
                                <h4 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-700 antialiased">
                                    Title {{ $project->title }}
                                </h4>
                                <h4 class="block font-sans text-2xl leading-snug tracking-normal text-blue-gray-900 antialiased">
                                    short title{{ $project->short_title }}
                                </h4>
                                <h4 class="block font-sans text-2xl leading-snug tracking-normal text-blue-gray-900 antialiased">
                                    type {{ $project->type_id}}
                                </h4>
                                <p class="mt-3 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
                                <p >{{ $project->description}}</p>
                                </p>
                            </div>
                            <div class="flex items-center justify-between p-6">
                                <div class="flex items-center -space-x-3">

                                </div>
                                <a href="{{ route('projects.show', $project->id ) }}">Show this project</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
