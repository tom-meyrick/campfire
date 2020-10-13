<html>
<head>
<h1>Campfire</h1>
</head>
<body>
    <h1>Campfire</h1>

    @foreach($projects as $project)
    <li>{{ $project->title }}</li>
    @endforeach
</body>
</html>