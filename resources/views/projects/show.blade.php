@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-end w-full">
        <p class="text-white text-xl">
             <a href="/projects">My projects</a> / {{$project->title}}
        </p>
    <button href="/projects/create" class="button">New project</button>
    </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
            <div class="mb-8">
                <h2 class="text-white text-l mb-3">Tasks</h2>
                    {{-- Tasks --}}
                            <div class="card">
                                 Lorem ipsum
                                    </div>
                                </div>
                            <div>
                        <h2 class="text-white text-l mb-3">Notes</h2>
                            {{-- General notes --}}
                                <textarea class="card w-full" style="min-height: 200px">
                                    </textarea>
                                </div>
                            </div>
                        <div class="lg:w-1/4 px-3">
                    @include('projects.card')
                </div>
                    </div>
                        </main>
                    @endsection