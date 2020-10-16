@extends('layouts.app')

@section('content')
    <div style="display: flex; align-items: center">
    <h1 style="margin-right: auto">Campfire</h1>
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