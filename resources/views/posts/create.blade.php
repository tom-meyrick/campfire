<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-sm mx-auto">
            <form method="POST" action="/admin/posts">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="title">
                        Title
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded" type="text" id="title" name="title" value=""
                        required>
                </div>

                <div class=mb-6>
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="excerpt">
                        Excerpt
                    </label>
                    <textarea class="border border-gray-400 p-2 w-full" name="excerpt" id="excerpt" required>
                        </textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class=mb-6>
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="body">
                        Body
                    </label>
                    <textarea class="border border-gray-400 p-2 w-full" name="body" id="body" required>
                        </textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </form>
        </x-panel>
    </section>
</x-layout>
