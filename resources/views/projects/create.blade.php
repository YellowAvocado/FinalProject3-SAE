<x-app-layout>
    <div class="py-12">
        <div class="grid justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-300 overflow-hidden shadow-sm w-96">
                <div class="grid justify-center p-6">

                    <h2>Create project </h2>
                    <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div>
                                <div class="py-3"><label for="title">title</label></div>
                                <input type="text" name="title">
                            </div>

                            <div>
                                <div class="py-3"><label for="short_title">short title</label></div>
                                <input type="text" name="short_title">
                            </div>

                            <div>
                                <div class="py-3"><label for="description">description</label></div>
                                <textarea name="description" id="description"></textarea>
                            </div>

                            <div class="py-3"><label for="type_id" name="type_id">project type</label></div>

                            <select class="py-3" name="type_id">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                                @endforeach
                            </select>

                            <div>
                                <div class="py-3"><label for="image"> image </label></div>
                                <input type="file" name="image">
                            </div>

                           <div class="py-3"> <button type="submit"> submit </button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



