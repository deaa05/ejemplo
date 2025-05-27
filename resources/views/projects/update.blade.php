<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h4>Editar Proyecto</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>¡Error!</strong> Por favor corrige los siguientes errores:<br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('ejemploproyecto.update', $proyecto->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $proyecto->titulo) }}" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control" rows="4" required>{{ old('descripcion', $proyecto->descripcion) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('ejemploproyecto.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</div>

</body>
</html>
