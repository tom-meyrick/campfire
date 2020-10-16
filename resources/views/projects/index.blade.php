<!DOCTYPE html>
<html>
<head>
<title>Campfire</title>
</head>

<body>
    <h1>Campfire</h1>

    @forelse($projects as $project)
    <a href="{{$project->path()}}">
    <li>{{ $project->title }}</li>
    </a>
    @empty
    <li>No projects yet</li>
    @endforelse
</body>

</html>