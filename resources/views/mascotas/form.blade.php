<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Mascotas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title text-center mb-4">Consulta de Mascotas</h1>
<div style="position: fixed; bottom: 50px; right: 10px; font-size: 0.875rem; color: gray;">
   Sistema de Gestión de Mascotas
</div>
<div style="position: fixed; bottom: 30px; right: 10px; font-size: 0.875rem; color: gray;">
  Desarrollo de Aplicaciones en Internet
</div>
<div style="position: fixed; bottom: 10px; right: 10px; font-size: 0.875rem; color: gray;">
    © Garcia Ccencho Cristian Rufino
</div>
    <h2>Buscar por tipo</h2>
    <form action="{{ route('mascotas.tipo') }}" method="GET">
        <label>Tipo:</label>
        <input type="text" name="tipo" required>
        <button type="submit">Buscar</button>
    </form>

    <h2>Ordenar por edad</h2>
    <form action="{{ route('mascotas.edad') }}" method="GET">
        <label>Orden:</label>
        <select name="orden">
            <option value="asc">Ascendente</option>
            <option value="desc">Descendente</option>
        </select>
        <button type="submit">Ordenar</button>
    </form>

    <h2>Filtrar por tipo, raza y cantidad</h2>
    <form action="{{ route('mascotas.filtrar') }}" method="GET">
        <label>Tipo:</label>
        <input type="text" name="tipo" required>
        <label>Raza:</label>
        <input type="text" name="raza" required>
        <label>Cantidad:</label>
        <input type="number" name="limite" min="1" value="5">
        <button type="submit">Filtrar</button>
    </form>
</body>
</html>
