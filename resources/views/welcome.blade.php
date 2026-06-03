<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-dark rounded-5 shadow-sm"
            style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
            <li class="nav-item">
                <a class="nav-link rounded-5" href="{{ route('proyecto.index') }}">Listado de Proyectos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active rounded-5" href="/">Hello World</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-5" href="{{ route('proyecto.create') }}">Nuevo Proyecto</a>
            </li>
        </ul>
    </div>

    <div class="container mt-5">
        <h1>¡Hola Mundo!</h1>
    </div>

</body>
</html>