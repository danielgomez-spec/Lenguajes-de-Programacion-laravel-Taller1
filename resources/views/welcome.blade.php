<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

    <div class="text-center text-dark">

        <h1 class="mb-2 fw-bold">¡Bienvenido!</h1>
        <p class="mb-4 fs-5 text-secondary">Sistema de Gestión de Proyectos</p>

        <img src="{{ asset('images/intro.png') }}" 
             alt="Bienvenida" 
             class="img-fluid mb-5 rounded shadow"
             style="max-width: 500px;">

        <div class="d-flex justify-content-center gap-3">
            <a href="/proyecto/create" class="btn btn-dark btn-lg px-4">
                 Registrar Nuevo Proyecto
            </a>
            <a href="{{ route('proyecto.index') }}" class="btn btn-outline-dark btn-lg px-4">
                 Ver Proyectos
            </a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>