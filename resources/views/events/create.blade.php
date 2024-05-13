<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Vista del Evento Programado</title>
</head>
<body>
<h1>Agregar Evento</h1>

<form method="POST" action="/events">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name">

    <label for="location">Ubicación:</label>
    <input type="text" id="location" name="location">

    <label for="date">Fecha:</label>
    <input type="datetime-local" id="date" name="date">

    <input type="submit" value="Agregar Evento">
</form>
</body>
</html>