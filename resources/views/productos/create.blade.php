<h1>Crear Producto</h1>

<form action="/productos" method="POST">
    @csrf

    Nombre: <input type="text" name="nombre"><br>
    Precio: <input type="number" name="precio" step="0.01"><br>
    Stock: <input type="number" name="stock"><br>
    Categoría: <input type="text" name="categoria"><br><br>

    <button type="submit">Guardar</button>
</form>
