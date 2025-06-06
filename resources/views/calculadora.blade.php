<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Notas del Semestre universitarios</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Notas del Semestre</h1>
        <form id="notaForm">
            <div class="input-group">
                <label for="corte1">Nota Corte 1 (30%):</label>
                <input type="number" id="corte1" name="corte1" step="0.01" required>
            </div>
            <div class="input-group">
                <label for="corte2">Nota Corte 2 (30%):</label>
                <input type="number" id="corte2" name="corte2" step="0.01" required>
            </div>
            <div class="input-group">
                <label for="corte3">Nota Corte 3 (30%):</label>
                <input type="number" id="corte3" name="corte3" step="0.01" required>
            </div>
            <div class="input-group">
                <label for="corte4">Nota Corte 4 (10%):</label>
                <input type="number" id="corte4" name="corte4" step="0.01" required>
            </div>
            <button type="button" onclick="calcularNotaTotal()">Calcular Nota Total</button>
        </form>
        <div id="resultado"></div>
    </div>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>

