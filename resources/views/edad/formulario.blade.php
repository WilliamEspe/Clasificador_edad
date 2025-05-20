<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Edad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Bienvenido al Sistema de Clasificación por Edad</h2>

        <form method="POST" action="/procesar-edad" class="mx-auto" style="max-width: 400px;">
            @csrf
            <div class="mb-3">
                <label for="edad" class="form-label">Ingrese su edad:</label>
                <input type="number" class="form-control" name="edad" id="edad" placeholder="Ejemplo: 25" required min="0" max="120">
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>

        <div class="mt-5">
            <h5 class="text-center">Rangos de edad y clasificación</h5>
            <div class="row mt-3">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card border-info">
                        <div class="card-body text-center">
                            <h6>0 - 5</h6>
                            <strong>Bebés</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card border-info">
                        <div class="card-body text-center">
                            <h6>6 - 12</h6>
                            <strong>Niños</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card border-info">
                        <div class="card-body text-center">
                            <h6>13 - 17</h6>
                            <strong>Adolescentes</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card border-info">
                        <div class="card-body text-center">
                            <h6>18 - 25</h6>
                            <strong>Jóvenes adultos</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card border-info">
                        <div class="card-body text-center">
                            <h6>26 - 59</h6>
                            <strong>Adultos</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card border-info">
                        <div class="card-body text-center">
                            <h6>60 - 74</h6>
                            <strong>Adultos mayores</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mb-3">
                    <div class="card border-info">
                        <div class="card-body text-center">
                            <h6>75 - 120</h6>
                            <strong>Personas longevas</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
