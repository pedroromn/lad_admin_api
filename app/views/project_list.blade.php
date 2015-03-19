
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
    <h1>Lista de proyectos</h1>
    @foreach ($projects as $project)

        <h3>{{ $project->title }}</h3>
        <small>{{ $project->direction }}</small>
        <p>{{ $project->description }}</p>
        <hr>
    @endforeach
</body>
</html>
