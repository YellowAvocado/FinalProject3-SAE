<x-app-layout>
    <div class="py-12">
        <div class="grid justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-300 overflow-hidden shadow-sm w-96">
                <div class="grid justify-center p-6">

                    @if (session()->has('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <h2>Create project </h2>
                    <form wire:submit.prevent="register" action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div>
                                <div class="py-3"><label for="title">title</label></div>
                                <input type="text" name="title">
                                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <div class="py-3"><label for="short_title">short title</label></div>
                                <input type="text" name="short_title">
                                @error('short_title') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <div class="py-3"><label for="description">description</label></div>
                                <textarea name="description" id="description"></textarea>
                                @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="py-3"><label for="type_id" name="type_id">project type</label></div>

                            <select class="py-3" name="type_id">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                                @endforeach
                                    @error('type_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            </select>

                            <div>
                                <div class="py-3"><label for="image"> image </label></div>
                                <input type="file" name="image">
                                @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                           <div class="py-3"> <button type="submit"> submit </button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



