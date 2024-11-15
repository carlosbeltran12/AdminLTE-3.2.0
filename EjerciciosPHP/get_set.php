<form action="index.php" method="post">
    Nombre: <input type="text" name="nombre">
    <input type="submit" value="Enviar">
</form>
<form action="index.php" method="get">
    Nombre (GET): <input type="text" name="nombre">
    <input type="submit" value="Enviar">
</form>
<form action="index.php" method="post" enctype="multipart/form-data">
    Selecciona un archivo: <input type="file" name="mi_archivo">
    <input type="submit" value="Subir archivo">
</form>
<form action="index.php" method="post">
    Nombre (REQUEST): <input type="text" name="nombre">
    <input type="submit" value="Enviar">
</form>
<form action="index.php" method="post">
    Usuario (SESSION): <input type="text" name="usuario">
    <input type="submit" value="Iniciar sesión">
</form>