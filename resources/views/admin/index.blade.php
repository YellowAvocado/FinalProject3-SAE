<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('admin.create') }}">
            <div class="mb-6 w-1/12 p-4 bg-white dark:bg-gray-200 sm:rounded-lg">create project </div></a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Projects table</div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-left text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <th scope="col" class="px-6 py-4">project</th>
                                            <th scope="col" class="px-6 py-4">short title</th>
                                            <th scope="col" class="px-6 py-4">type</th>
                                            <th scope="col" class="px-6 py-4">image</th>
                                            <th scope="col" class="px-6 py-4"></th>
                                            <th scope="col" class="px-6 py-4"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($projects as $project)
                                            <tr class="border-b dark:border-neutral-500">
                                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $project->id }}</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $project->title }}k</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $project->short_title }}</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $project->type->type }}</td>
                                                <td class="whitespace-nowrap px-6 py-4"><img class="w-10" src="{{Storage::url($project->images)}}" alt="project image"></td>
                                                <td class="whitespace-nowrap px-6 py-4"><a href="{{ route('projects.edit', $project->id ) }}">Edit</a></td>
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <form class="text-red-700" action="{{route('admin.destroy', $project->id)}}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" onclick="return confirm('Do you want to delete {{$project->title}} project');">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>

                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

