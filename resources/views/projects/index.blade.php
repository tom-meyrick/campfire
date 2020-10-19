@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-end w-full">
    <h2 class="text-white text-xl">My projects</h2>
    <button href="/projects/create" class="button">New project</button>
    </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
        <div class="lg:w-1/3 px-2 pb-6">
            @include('projects.card')
            </div>
                @empty
            <div>No projects yet.</div>
        @endforelse
            </main>
                @endsection