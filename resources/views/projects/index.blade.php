@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-center w-full">
    <h2 class="text-white text-xl">My projects</h2>
    <button href="/projects/create" class="button">New project</button>
    </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-2 pb-6">
                <div class="bg-white rounded-lg shadow-sm p-5" style="height:200px">
            <h3 class="font-normal text-lg py-4 -ml-5 mb-3 border-l-4 border-gray-400 pl-4">
        <a href="{{$project->path()}}">{{$project->title}}</a>
            </h3>
                <div class="text-gray-500">{{ Illuminate\Support\Str::limit($project->description, 100) }}</div>
            </div>
        </div>
            @empty
        <div>No projects yet.</div>
        @endforelse
            </main>
@endsection