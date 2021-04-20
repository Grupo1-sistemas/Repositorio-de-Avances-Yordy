Formulario para crear o introducir productos al almacen

<form action="{{ url('/almacen') }}" method="post">
@csrf
    <label for="nombre"> Nombre </label>
    <input type="text" name="nombre" id="nombre" >
    <br>
    <label for="Cantidad"> Cantidad </label>
    <input type="text" name="cantidad" id="cantidad" >
    <br>
    <label for="Descripcion"> Descripcion </label>
    <input type="text" name="descripcion" id="descripcion" >
    <br>
    <label for="Precio"> Precio </label>
    <input type="text" name="precio" id="precio" >
    <br>
    <input type="submit" value="Guardar Datos" >
</form>