<?php

if($_POST){
    echo $_POST['nombre'];
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Nombre:" name="nombre" id="nombre"`>
        <br>

        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <br>
        <br>

        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <br>
        <br>

        <select name="year" id="year" >
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>
        <br>
        <label for="terminos">Aceptar Los Terminos y Condiciones ?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>