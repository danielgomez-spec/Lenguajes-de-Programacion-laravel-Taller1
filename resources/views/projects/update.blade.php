<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4 d-flex gap-2">
        <a href="{{ route('proyecto.index') }}" class="btn btn-outline-dark">Listado de Proyectos</a>
        <a href="/" class="btn btn-outline-dark">Inicio</a>
        <a href="/proyecto/create" class="btn btn-outline-dark">Nuevo Proyecto</a>
    </div>

    <div class="container text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded shadow p-4 text-start bg-body-secondary border-secondary-subtle">

                <p class="fs-1 text-center">Editar Proyecto</p>
                <br/>

                <form action="{{ route('proyecto.update', $proyecto->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 110px;">Título</span>
                        <input type="text" name="nombre" class="form-control"
                            value="{{ $proyecto->nombre }}" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 110px;">Descripción</span>
                        <textarea class="form-control" name="descripcion" rows="3" required>{{ $proyecto->descripcion }}</textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100">Actualizar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>