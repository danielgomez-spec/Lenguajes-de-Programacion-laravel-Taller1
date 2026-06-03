<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container mt-4">
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-dark rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
            <li class="nav-item" role="presentation">
                <a class="nav-link rounded-5" href="{{ route('proyecto.index') }}" role="tab">Listado de Proyectos</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link rounded-5" href="/">Hello World</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active rounded-5" href="{{ route('proyecto.create') }}" role="tab" aria-selected="true">Nuevo Proyecto</a>
            </li>
        </ul>
    </div>

    <div class="container text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded shadow p-4 text-start bg-body-secondary border-secondary-subtle">
                
                <p class="fs-1 text-center">Registro de Proyectos</p>
                <br/>

                <form action="{{ route('proyecto.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 110px;">Título</span>
                        <input type="text" name="nombre" id="nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 110px;">Descripción</span>
                        <textarea class="form-control" name="descripcion" id="descripcion" aria-label="With textarea" rows="3" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>