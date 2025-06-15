<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Filtro de Mascotas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Mascotas filtradas</h2>
        @if(count($mascotas) > 0)
            <table class="table table-bordered table-hover bg-white">
                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Edad</th>
                        <th>Raza</th>
                        <th>Peso</th>
                        <th>Fecha de adopción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mascotas as $m)
                    <tr>
                        <td>{{ $m->nombre }}</td>
                        <td>{{ $m->tipo }}</td>
                        <td>{{ $m->edad }}</td>
                        <td>{{ $m->raza }}</td>
                        <td>{{ $m->peso }}</td>
                        <td>{{ $m->fecha_adopcion }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-danger">No se encontraron resultados con esos filtros.</div>
        @endif

        <a href="{{ url('/mascotas') }}" class="btn btn-outline-primary mt-3">← Volver</a>
    </div>
</body>
</html>
