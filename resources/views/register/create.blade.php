<x-layout>
    <section class="px-6 py8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                {{-- Name --}}
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="name">
                        Name
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="text"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           required>

                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                </div>
                {{-- Username --}}
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="username">
                        Username
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="text"
                           id="username"
                           name="username"
                           value="{{ old('username') }}"
                           required>

                           @error('username')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                       @enderror
                </div>
                         {{-- Email --}}
                         <div class="mb-6">
                            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                   for="email">
                                Email
                            </label>
                            <input class="w-full p-2 border border-gray-400 rounded"
                                   type="email"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required>

                                   @error('email')
                                   <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                               @enderror
                        </div>
                                 {{-- Password --}}
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="password">
                        Password
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="password"
                           id="password"
                           name="password"
                           required>

                           @error('password')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                       @enderror
                </div>
                {{-- Button --}}
                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                            >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>