<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Programar evento</title>
</head>
<body>
<h1>Eventos</h1>

@foreach ($events as $event)
    <div>
        <h2>{{ $event->name }}</h2>
        <p>Ubicación: {{ $event->location }}</p>
        <p>Fecha: {{ $event->date }}</p>
    </div>
@endforeach
</body>
</html>