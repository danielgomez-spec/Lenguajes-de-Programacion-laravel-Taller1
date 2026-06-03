<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-dark rounded-5 shadow-sm"
            style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
            <li class="nav-item">
                <a class="nav-link active rounded-5" href="{{ route('proyecto.index') }}">Listado de Proyectos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-5" href="/">Hello World</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-5" href="{{ route('proyecto.create') }}">Nuevo Proyecto</a>
            </li>
        </ul>
    </div>

    <div class="container mt-5">
        <h2 class="mb-4">Listado de Proyectos</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de creación</th>
                </tr>
            </thead>
            <tbody>
                @forelse($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->id }}</td>
                        <td>{{ $proyecto->nombre }}</td>
                        <td>{{ $proyecto->descripcion }}</td>
                        <td>{{ $proyecto->created_at->format('d/m/Y H:i') }}</td>
                        <td> <a href="{{ route('proyecto.edit', $proyecto->id) }}" class="btn btn-warning btn-sm">Editar</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No hay proyectos registrados aún.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>