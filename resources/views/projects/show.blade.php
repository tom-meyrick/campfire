@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-end w-full">
    <h2 class="text-white text-xl">My projects</h2>
    <button href="/projects/create" class="button">New project</button>
    </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
            <div class="mb-6">
                <h2 class="text-white text-l mb-3">Tasks</h2>
                    {{-- Tasks --}}
                            <div class="card">
                                 Lorem ipsum
                                    </div>
                                </div>
                            <div>
                        <h2 class="text-white text-l mb-3">Notes</h2>
                            {{-- General notes --}}
                                <div class="card">
                                        Lorem ipsum
                                    </div>
                                </div>
                            </div>
                        <div class="lg:w-1/4 px-3">
                    <div class="card">
                        <h1>{{$project->title}}</h1>
                            <div>{{$project->description}}</div>
                        <a href="/projects">Go Back</a>
                    </div>
                </div>
                    </div>
                        </main>
                    @endsection