@extends('layouts.app')

@section('content')
    <div class="flex items-center mb-3">
    <a href="/projects/create">Add a new project</a>
    </div>
<ul>
    @forelse($projects as $project)

    <a href="{{$project->path()}}">
    <li>{{ $project->title }}</li>
    </a>
    @empty
    <li>No projects yet</li>
    @endforelse
    </ul>
@endsection