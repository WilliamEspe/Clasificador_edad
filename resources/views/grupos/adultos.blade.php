<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Portal adultos</title>
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center p-5">
    <div class="container">
        <h1 class="mb-4">{{ $mensaje }}</h1>

        <!-- Botón Volver -->
        <a href="{{ url('/') }}" class="btn btn-primary">Volver al Inicio</a>
    </div>
</body>
</html>
