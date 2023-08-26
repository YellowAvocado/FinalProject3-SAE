<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <p class="text-amber-600">UX/UI design projects</p>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid">
                <div class="grid gap-10 justify-center w-90">


                    @foreach($projects as $project)
                        {{--@foreach($types as $type)--}}
                        <div class="bg-white bg-clip-border text-gray-700" >
                            <div class="m-6 overflow-hidden bg-transparent bg-clip-border text-gray-700 shadow-none">
                                <img src="{{Storage::url($project->images)}}" alt="project image">
                            </div>
                            <div class="p-6">
                                <h4 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-700 antialiased">
                                    <span class="text-blue-gray-500">{{ $project->title }}</span>
                                </h4>
                                <h4 class="block font-sans text-l leading-snug tracking-normal text-amber-600 antialiased">
                                    {{ $project->short_title }}
                                </h4>
                                <h4 class="block font-sans text-2xl leading-snug tracking-normal text-blue-gray-700 antialiased">
                                    <span class="text-amber-600">{{ $project->type->type }} project</span>
                                </h4>
                                {{--<p class="w-96 mt-6 ml-3 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
                                    {{ $project->description}}
                                </p>--}}
                            </div>
                            <div class="flex items-center justify-between p-6">
                                <a href="{{ route('projects.show', $project->id ) }}">Show this project</a>
                            </div>
                        </div>
                        {{--@endforeach--}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

