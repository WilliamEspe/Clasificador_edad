<form method="POST" action="/procesar-edad">
    @csrf
    <label for="edad">Ingrese su edad:</label>
    <input type="number" name="edad" min="0" max="120" required>
    <button type="submit">Enviar</button>
</form>
