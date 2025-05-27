<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Proyectos</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Lista de Proyectos</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('ejemploproyecto.create') }}" class="btn btn-primary mb-3">+ Nuevo Proyecto</a>

    @if($proyectos->isEmpty())
        <div class="alert alert-warning">
            No hay proyectos registrados.
        </div>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->id }}</td>
                        <td>{{ $proyecto->titulo }}</td>
                        <td>{{ $proyecto->descripcion }}</td>
                        <td>
                            <a href="{{ route('ejemploproyecto.edit', $proyecto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('ejemploproyecto.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este proyecto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

</body>
</html>
