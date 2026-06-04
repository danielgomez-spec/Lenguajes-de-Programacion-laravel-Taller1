<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4 d-flex gap-2">
        <a href="{{ route('proyecto.index') }}" class="btn btn-dark">Listado de Proyectos</a>
        <a href="/" class="btn btn-outline-dark">Inicio</a>
        <a href="/proyecto/create" class="btn btn-outline-dark">Nuevo Proyecto</a>
    </div>

    <div class="container mt-5">
        <h2 class="mb-4">Listado de Proyectos</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha creación</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($proyectos as $proyecto)
                    <tr>
                        <th scope="row">{{ $proyecto->id }}</th>
                        <td>{{ $proyecto->nombre }}</td>
                        <td>{{ $proyecto->descripcion }}</td>
                        <td>{{ $proyecto->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <form action="{{ route('proyecto.edit', $proyecto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                            </form>

                            <form action="{{ route('proyecto.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Estás seguro de eliminar este proyecto?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No hay proyectos registrados aún.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>